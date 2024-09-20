<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendContactForm(Request $request)
    {
        // Validate the form input
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Send the email and pass all the necessary data
        Mail::send('emails.contact', [
            'name' => $validated['name'], // 'name' is the key to be used in the view (email)
            'email' => $validated['email'],
            'messageContent' => $validated['message'] // 'messageContent' is the key to avoid conflicts with other variables
        ], function ($mail) use ($request) {
            $mail->to('tynangav@gmail.com')
                 ->subject('Contact Form Submission');
        });

        // Redirect back with success message
        return redirect()->back()->with('success', 'Your message has been sent!');
    }
}