<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;

class ContactController extends Controller
{

    // show contact form
    public function contactForm()
    {
        return view('contactForm');
    }

    
    // action after submit
    public function storeContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            // 'phone' => 'required|digits:10|numeric',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $input = $request->all();

        Contact::create($input);

        //  Send mail to admin
        Mail::send('contactMail', array(
            'name' => $input['name'],
            'email' => $input['email'],
            // 'phone' => $input['phone'],
            'subject' => $input['subject'],
            'bodyMessage' => $input['message']
        ), function($message) use ($request){

            $message->from($request->email, 'AstroTracker Contact Form');
            $message->to('')
            ->subject($request->get('subject'));
        });

        return redirect()->back()->with(['success' => 'Thank You ! Message sent successfully']);
    }
}