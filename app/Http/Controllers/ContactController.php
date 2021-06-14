<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{

    public function contact(Request $request)
    {

        \Mail::send('emails.contact',
            [
                'first_name' => $request->get('first_name'),
                'last_name' => $request->get('last_name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'subject' => $request->get('subject'),
                'user_message' => $request->get('message'),
                'count' => $request->get('count'),
                'date' => $request->get('date'),
            ],
            function ($message) use ($request) {
                $message->from(env("MAIL_FROM_ADDRESS"));
                $message->subject($request->subject);
                $message->to(env("MAIL_TO_ADDRESS"));
            }
        );

        return back()->with('success', 'Merci pour votre message, nous allons le prendre en compte très rapidement.');

    }

}
