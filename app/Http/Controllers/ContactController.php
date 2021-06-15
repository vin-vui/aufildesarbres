<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

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
                'count_people' => $request->get('count_people'),
                'count_accompanist' => $request->get('count_accompanist'),
                'date_arrival' => Carbon::parse($request->get('date_arrival'))->format('H:i d/m/Y'),
                'date_departure' => Carbon::parse($request->get('date_departure'))->format('H:i d/m/Y'),
                'institution' => $request->get('institution'),
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
