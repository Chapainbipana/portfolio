<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;

class PorfolioController extends Controller
{
    public function submit(Request $request)
    {
       $user= $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);
        

        $formData = $request->only('name', 'email', 'message');
 //dd($formData);
        // Send the email
        Mail::to('chapai.bipana65@gmail.com')->send(new ContactFormMail($formData));
      //  dd($user);
        return back()->with('success', 'Your message has been sent successfully!');
    }
}
