<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class AdminTributeController extends Controller
{
    public function showUploadForm()
    {
        return view('admin.tributes.upload');
    }


    public function storeTribute(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
            'is_cover' => 'sometimes|boolean',
            'page_number' => 'nullable|integer|min:1',
        ]);


        // dd($request->all());

        DB::beginTransaction();

        try {
            // Upload tribute image
            $imagePath = $request->file('image')->store('tributes', 'public');

            // Handle page numbering
            $pageNumber = $request->page_number;

            // If it's a cover image, force page number to be null (cover is always first)
            if ($request->boolean('is_cover')) {
                $pageNumber = null;
            }
            // If no page number provided and it's not a cover, assign next available number
            elseif (empty($pageNumber)) {
                $lastPage = Tribute::whereNotNull('page_number')->max('page_number');
                $pageNumber = $lastPage ? $lastPage + 1 : 1;
            }
            // If page number is provided and it's not a cover, reorder existing pages
            else {
                $this->reorderPages($pageNumber);
            }

            // Create tribute entry
            $tribute = Tribute::create([
                'image_path' => $imagePath,
                'is_cover' => $request->boolean('is_cover'),
                'page_number' => $pageNumber,
            ]);

            // If marked as cover, delete previous cover tribute
            if ($tribute->is_cover) {
                $previousCover = Tribute::where('id', '!=', $tribute->id)
                    ->where('is_cover', true)
                    ->first();

                if ($previousCover) {
                    // Delete the image file from storage
                    Storage::disk('public')->delete($previousCover->image_path);

                    // Delete the database record
                    $previousCover->delete();
                }
            }

            DB::commit();

            return redirect()->route('admin.tributes.upload')
                ->with('success', 'Tribute uploaded successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Tribute upload failed: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString()
            ]);

            return redirect()->back()
                ->withInput()
                ->with('error', 'An error occurred while uploading the tribute. Please try again.');
        }
    }

    protected function reorderPages($newPageNumber)
    {
        // Get all tributes with page number >= new page number
        $tributesToUpdate = Tribute::whereNotNull('page_number')
            ->where('page_number', '>=', $newPageNumber)
            ->orderBy('page_number', 'asc')
            ->get();

        // Increment their page numbers (process in reverse order to avoid conflicts)
        foreach ($tributesToUpdate->reverse() as $tribute) {
            $tribute->update(['page_number' => $tribute->page_number + 1]);
        }
    }


    // protected function reorderPages($newPageNumber)
    // {
    //     $existing = Tribute::where('page_number', $newPageNumber)->first();

    //     if ($existing) {
    //         // Shift all pages starting from the one at the desired spot
    //         Tribute::whereNotNull('page_number')
    //             ->where('page_number', '>=', $newPageNumber)
    //             ->orderBy('page_number', 'desc') // shift from the last to avoid duplicate keys
    //             ->get()
    //             ->each(function ($tribute) {
    //                 $tribute->update(['page_number' => $tribute->page_number + 1]);
    //             });
    //     }
    // }

    public function index()
    {
        // Get cover first, then ordered pages, then unordered pages
        $tributes = Tribute::orderBy('is_cover', 'desc')
            ->orderByRaw('ISNULL(page_number), page_number asc')
            ->get();

        return view('admin.tributes.index', compact('tributes'));
    }
}
