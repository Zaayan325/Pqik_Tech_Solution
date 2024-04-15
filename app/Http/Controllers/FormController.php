<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function submitForm(Request $request)
    {

         $request->validate([
            'name' => 'required',
            'email' => [
                'required',
                'email',
                // Rule::unique('users', 'email'), // Assuming 'users' is your users table
            ],
            // Add other validation rules for your form fields
        ]);
        
        $selectedOptions = $request->input('options', []);
        $userName = $request->input('name');
        $userEmail = $request->input('email');

        // Check email availability in Google using a third-party service or library

        // Build email message
        $message = "User: $userName\n";
        $message .= "Email: $userEmail\n";
        $message .= "Selected Options:\n";
        foreach ($selectedOptions as $option) {
            $message .= "- $option\n";
        }

        // Send email
        Mail::raw($message, function ($mail) {
            $mail->to('zaayanzubair@pqik.pk')->subject('New Form Submission');
        });

        // You can return a response or redirect as needed
        return redirect()->route('thank-you');
    }
}
