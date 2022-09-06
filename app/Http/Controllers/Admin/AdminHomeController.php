<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Exception;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    /**
     * index function
     * show admin | home page
     * @return view
     */
    public function index ()
    {
        $home = Home::first();
        return view('admin.home.home', compact('home'));
    }

    /**
     * edit function
     * edit home page data
     * @return view
     */
    public function edit ()
    {
        $home = Home::first();
        return view('admin.home.edit', compact('home'));
    }

    /**
     * update function
     * update home page data
     * @param Request $request
     * @return redirect
     */
    public function update (Request $request)
    {
        try {
            $home = Home::first();
            $home->projects_desc = $request->proj_desc_en;
            $home->projects_desc_ar = $request->proj_desc_ar;
            $home->establish = $request->establish;
            $home->projects = $request->projects;
            $home->employees = $request->employees;
            $home->customers = $request->customers;
            if($request->hasFile('nav_logo')) {
                $image_name = time().'_'.$request->file('nav_logo')->getClientOriginalName();
                $filePath = $request->file('nav_logo')->move('assets/upload/home', $image_name);
                $home->nav_logo = time().'_'.$request->file('nav_logo')->getClientOriginalName();
            }
            if($request->hasFile('footer_logo')) {
                $image_name = time().'_'.$request->file('footer_logo')->getClientOriginalName();
                $filePath = $request->file('footer_logo')->move('assets/upload/home', $image_name);
                $home->footer_logo = time().'_'.$request->file('footer_logo')->getClientOriginalName();
            }
            $home->save();
            return redirect()->to('/admin/home')->with('home_success', 'Home data has been updated successfully');
        } catch(Exception $e) {
            return redirect()->to('/admin/home')->with('home_fail', 'An unexpected error occurred');
        }
    }

}
