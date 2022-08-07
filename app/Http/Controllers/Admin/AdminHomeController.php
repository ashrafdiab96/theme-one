<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
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
     * @param Request $request
     * @return view
     */
    public function edit (Request $request)
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
        $home = Home::first();
        $home->projects_desc = $request->proj_desc_en;
        $home->projects_desc_ar = $request->proj_desc_ar;
        $home->establish = $request->establish;
        $home->projects = $request->projects;
        $home->employees = $request->employees;
        $home->customers = $request->customers;
        $home->save();
        if($home) {
            return redirect()->to('/admin/home')->with('home_success', 'Home data has been updated successfully');
        }
        return redirect()->to('/admin/home')->with('home_fail', 'An unexpected error occurred');
    }

}
