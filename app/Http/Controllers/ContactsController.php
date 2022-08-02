<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;

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
        return response()->json('saved');
    }

}
