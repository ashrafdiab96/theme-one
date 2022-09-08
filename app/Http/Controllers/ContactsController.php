<?php

namespace App\Http\Controllers;

use App\Mail\MessagesMail;
use App\Models\Messages;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    /**
     * index function
     * show contacts page
     * @return view
     */
    public function index ()
    {
        return view('client.contacts');
    }

    /**
     * message function
     * save new message
     * @param Request $request
     * @return response
     */
    public function message (Request $request)
    {
        $validation = [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ];
        $this->validate($request, $validation);

        $message = new Messages();
        $message->name = $request->name;
        $message->phone = $request->phone;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->contacted = 0;
        $message->save();
        // $saved_meg = Messages::where('id', $message->id)->first();
        $this->sendEmail($message);
        return response()->json('saved');
    }

    /**
     * sendEmail function
     * send email to admin with message data
     * @param string $email
     * @return void
     */
    public function sendEmail($message)
    {
        Mail::to(env('MAIL_USERNAME'))->send(new MessagesMail($message));
    }

}
