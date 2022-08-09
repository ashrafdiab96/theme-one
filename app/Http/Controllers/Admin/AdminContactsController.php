<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use Exception;
use Illuminate\Http\Request;

class AdminContactsController extends Controller
{
    /**
     * index function
     * show contacts page
     * @return view
     */
    public function index ()
    {
        $contacts = Contacts::first();
        return view('admin.contacts.contacts', compact('contacts'));
    }

    /**
     * edit function
     * edit contacts data
     * @return view
     */
    public function edit ()
    {
        $contacts = Contacts::first();
        return view('admin.contacts.edit', compact('contacts'));
    }

    /**
     * update function
     * update contacts data
     * @param Request $request
     * @return redirect
     */
    public function update (Request $request)
    {
        try {
            $contacts = Contacts::first();
            $contacts->phone = $request->phone;
            $contacts->mobile = $request->mobile;
            $contacts->fax = $request->fax;
            $contacts->address_ar = $request->address_ar;
            $contacts->address_en = $request->address_en;
            $contacts->why_us = $request->why_us;
            $contacts->why_us_ar = $request->why_us_ar;
            $contacts->email = $request->email;
            $contacts->fb_url = $request->fb_url;
            $contacts->tw_url = $request->tw_url;
            $contacts->in_url = $request->in_url;
            $contacts->ln_url = $request->ln_url;
            $contacts->yu_url = $request->yu_url;
            if($request->hasFile('background')) {
                $old_img = public_path('assets/upload/contacts/'.$contacts->background);
                if(isset($contacts->background)) {
                    unlink($old_img);
                }

                $image_name = time().'_'.$request->file('background')->getClientOriginalName();
                $filePath = $request->file('background')->move('assets/upload/contacts', $image_name);
                $contacts->background = time().'_'.$request->file('background')->getClientOriginalName();
            }
            $contacts->save();
            return redirect()->to('/admin/contacts')->with('contacts_success', 'Contacts data has been updated successfully');

        } catch(Exception $e) {
            return redirect()->to('/admin/contacts')->with('contacts_fail', 'An unexpected error occured');
        }
    }

}
