<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Messages;
use Exception;
use Illuminate\Http\Request;

class AdminMessagesController extends Controller
{
    /**
     * index function
     * show messages page
     * @return void
     */
    public function index ()
    {
        $messages = Messages::all();
        return view('admin.messages', compact('messages'));
    }

    /**
     * coneected function
     * set message as connected
     * @param integer $id
     * @return redirect
     */
    public function coneected ($id)
    {
        try {
            $message = Messages::findOrFail($id);
            $message->contacted = 1;
            $message->save();
            return redirect()->to('/admin/messages')->with('message_success', 'Message has been connected');

        } catch(Exception $e) {
            return redirect()->to('/admin/messages')->with('message_failed', 'An unexpected error occured');
        }
    }

}
