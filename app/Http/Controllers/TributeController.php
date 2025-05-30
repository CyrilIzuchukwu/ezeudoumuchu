<?php

namespace App\Http\Controllers;

use App\Mail\CondolenceMail;
use App\Models\Condolence;
use App\Notifications\CondolenceNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class TributeController extends Controller
{
    public function tribute()
    {
        $condolences = Condolence::latest()->paginate(5);
        return view('welcome', compact('condolences'));
    }

    public function tributeStore(Request $request)
    {
        $ip = $request->ip();

        // Check if IP has already submitted
        if (Condolence::where('ip_address', $ip)->exists()) {
            return redirect()->back()
                            ->with('error', 'You have already submitted a tribute.')
                            ->with('tab', 'condolences');
        }

        $request->validate([
            'fullName' => 'required|string|max:255',
            'email' => 'nullable|email|unique:condolences,email',
            'tribute' => 'required|string|max:2000',
        ]);

        // Save including IP address
        $condolence = Condolence::create([
            'fullName' => $request->fullName,
            'email' => $request->email,
            'tribute' => $request->tribute,
            'ip_address' => $ip,
        ]);

        // Mail::to('braintesser@gmail.com')->send(new CondolenceMail($condolence));
        Mail::to('alexcyril34@gmail.com')->send(new CondolenceMail($condolence));

        return redirect()->back()
                        ->with('success', 'Your tribute has been submitted successfully!')
                        ->with('tab', 'condolences');
    }
}
