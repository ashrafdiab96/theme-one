<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Exception;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    /**
     * index function
     * show profile page
     * @return view
     */
    public function index ()
    {
        $profile = Profile::first();
        return view('admin.profile.profile', compact('profile'));
    }

    /**
     * index function
     * edit profile data
     * @return view
     */
    public function edit ()
    {
        $profile = Profile::first();
        return view('admin.profile.edit', compact('profile'));
    }

    /**
     * update function
     * update profile data
     * @param Request $request
     * @return redirect
     */
    public function update (Request $request)
    {
        try {
            $profile = Profile::first();
            $profile->missions_ar = $request->missions_ar;
            $profile->missions_en = $request->missions_en;
            $profile->vision_ar = $request->vision_ar;
            $profile->vision_en = $request->vision_en;
            $profile->strength_ar = $request->strength_ar;
            $profile->strength_en = $request->strength_en;
            if($request->hasFile('background')) {
                $old_img = public_path('assets/upload/profile/'.$profile->background);
                if(isset($profile->background)) {
                    unlink($old_img);
                }
                $image_name = time().'_'.$request->file('background')->getClientOriginalName();
                $filePath = $request->file('background')->move('assets/upload/profile', $image_name);
                $profile->background = time().'_'.$request->file('background')->getClientOriginalName();
            }
            $profile ->save();
            return redirect()->to('/admin/profile')->with('profile_success', 'Profile data has been updated successfully');

        } catch(Exception $e) {
            return redirect()->to('/admin/profile')->with('profile_fail', 'An unexpected error occured');
        }
    }

}
