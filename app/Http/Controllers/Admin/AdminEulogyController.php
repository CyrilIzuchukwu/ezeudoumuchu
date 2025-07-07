<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Eulogy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class AdminEulogyController extends Controller
{


    // Show all eulogies
    public function index()
    {
        $eulogies = Eulogy::orderBy('page_number', 'asc')->get();
        return view('admin.eulogy.index', compact('eulogies'));
    }


    public function showUploadForm()
    {
        return view('admin.eulogy.upload');
    }


    public function storeEulogy(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
            'page_number' => 'nullable|integer|min:1',
        ]);

        DB::beginTransaction();

        try {
            // Upload eulogy image
            $imagePath = $request->file('image')->store('eulogies', 'public');

            // Handle page numbering
            $pageNumber = $request->page_number;

            // If no page number provided, assign next available number
            if (empty($pageNumber)) {
                $lastPage = Eulogy::whereNotNull('page_number')->max('page_number');
                $pageNumber = $lastPage ? $lastPage + 1 : 1;
            }
            // If page number is provided, reorder existing pages
            else {
                $this->reorderPages($pageNumber);
            }

            // Create eulogy entry
            Eulogy::create([
                'image_path' => $imagePath,
                'page_number' => $pageNumber,
            ]);

            DB::commit();

            return redirect()->route('admin.eulogy.upload')
                ->with('success', 'Eulogy uploaded successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Eulogy upload failed: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString()
            ]);

            return redirect()->back()
                ->withInput()
                ->with('error', 'An error occurred while uploading the eulogy. Please try again.');
        }
    }

    protected function reorderPages($newPageNumber)
    {
        // Get all eulogies with page number >= new page number
        $eulogiesToUpdate = Eulogy::whereNotNull('page_number')
            ->where('page_number', '>=', $newPageNumber)
            ->orderBy('page_number', 'asc')
            ->get();

        // Increment their page numbers (process in reverse order to avoid conflicts)
        foreach ($eulogiesToUpdate->reverse() as $eulogy) {
            $eulogy->update(['page_number' => $eulogy->page_number + 1]);
        }
    }



    // Show edit form
    public function edit(Eulogy $eulogy)
    {
        return view('admin.eulogy.edit', compact('eulogy'));
    }


    // Update eulogy
    public function update(Request $request, Eulogy $eulogy)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'page_number' => [
                'nullable',
                'integer',
                'min:1',
                function ($attribute, $value, $fail) use ($eulogy) {
                    if ($value && Eulogy::where('page_number', $value)
                        ->where('id', '!=', $eulogy->id)
                        ->exists()
                    ) {
                        $fail('This page number is already assigned to another eulogy.');
                    }
                },
            ],
        ]);

        DB::beginTransaction();

        try {
            $data = [];

            if ($request->hasFile('image')) {
                // Delete old image
                Storage::disk('public')->delete($eulogy->image_path);
                // Upload new image
                $data['image_path'] = $request->file('image')->store('eulogies', 'public');
            }

            if ($request->page_number != $eulogy->page_number) {
                $newPageNumber = $request->page_number;

                if (empty($newPageNumber)) {
                    $lastPage = Eulogy::whereNotNull('page_number')
                        ->where('id', '!=', $eulogy->id)
                        ->max('page_number');
                    $newPageNumber = $lastPage ? $lastPage + 1 : 1;
                } else {
                    $this->reorderPages($newPageNumber, $eulogy->id);
                }

                $data['page_number'] = $newPageNumber;
            }

            $eulogy->update($data);

            DB::commit();

            return redirect()->route('admin.eulogy.index')
                ->with('success', 'Eulogy updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Eulogy update failed: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString()
            ]);

            return redirect()->back()
                ->withInput()
                ->with('error', 'An error occurred while updating the eulogy. Please try again.');
        }
    }

    // Delete eulogy
    public function destroy(Eulogy $eulogy)
    {
        DB::beginTransaction();

        try {
            // Delete the image file
            Storage::disk('public')->delete($eulogy->image_path);

            // Delete the record
            $eulogy->delete();

            // Reorder remaining pages
            $this->reorderAfterDelete();

            DB::commit();

            return redirect()->route('admin.eulogy.index')
                ->with('success', 'Eulogy deleted successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Eulogy deletion failed: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString()
            ]);

            return redirect()->back()
                ->with('error', 'An error occurred while deleting the eulogy. Please try again.');
        }
    }


    protected function reorderAfterDelete()
    {
        $eulogies = Eulogy::orderBy('page_number', 'asc')->get();
        $pageNumber = 1;

        foreach ($eulogies as $eulogy) {
            if ($eulogy->page_number != $pageNumber) {
                $eulogy->update(['page_number' => $pageNumber]);
            }
            $pageNumber++;
        }
    }
}
