<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    //  public function show()
    // {
    //     return view('contact');
    // }


      public function contactStore(Request $request)
    {
        $details = $request->validate([
            'contactName' => 'required|string|max:100',
            'contactEmail' => 'required|email',
            'contactMessage' => 'required|string|max:2000',
        ]);

        // Send the email
        Mail::to('sly@inmemoryofezeudoumuchu.life')->send(
            new ContactUsMail($details)
        );

        return redirect()->back()
                        ->with('success', 'Your message has been submitted successfully!')
                        ->with('tab', 'contact');
    }
}
