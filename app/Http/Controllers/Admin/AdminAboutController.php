<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminAboutController extends Controller
{
    /**
     * index function
     * show about page
     * @return view
     */
    public function index ()
    {
        $about = About::first();
        return view('admin.about.about', compact('about'));
    }

    /**
     * edit function
     * edit about page
     * @return view
     */
    public function edit ()
    {
        $about = About::first();
        return view('admin.about.edit', compact('about'));
    }

    /**
     * update function
     * update about page
     * @param Request $request
     * @return redirect
     */
    public function update (Request $request)
    {
        try {
            $about = About::first();
            $about->comp_name_ar = $request->comp_name_ar;
            $about->comp_name_en = $request->comp_name_en;
            $about->desc_ar = $request->desc_ar;
            $about->desc_en = $request->desc_en;
            $about->founders_msg_ar = $request->founders_msg_ar;
            $about->founders_msg_en = $request->founders_msg_en;
            if($request->hasFile('background')) {
                $old_img = public_path('assets/upload/about/'.$about->background);
                if(isset($about->background)) {
                    unlink($old_img);
                }
                $image_name = time().'_'.$request->file('background')->getClientOriginalName();
                $filePath = $request->file('background')->move('assets/upload/about', $image_name);
                $about->background = time().'_'.$request->file('background')->getClientOriginalName();
            }
            if($request->hasFile('founder_1_img')) {
                $old_img = public_path('assets/upload/about/'.$about->founder_1_img);
                if(isset($about->founder_1_img)) {
                    unlink($old_img);
                }
                $image_name = time().'_'.$request->file('founder_1_img')->getClientOriginalName();
                $filePath = $request->file('founder_1_img')->move('assets/upload/about', $image_name);
                $about->founder_1_img = time().'_'.$request->file('founder_1_img')->getClientOriginalName();
            }
            if($request->hasFile('founder_2_img')) {
                $old_img = public_path('assets/upload/about/'.$about->founder_2_img);
                if(isset($about->founder_2_img)) {
                    unlink($old_img);
                }
                $image_name = time().'_'.$request->file('founder_2_img')->getClientOriginalName();
                $filePath = $request->file('founder_2_img')->move('assets/upload/about', $image_name);
                $about->founder_2_img = time().'_'.$request->file('founder_2_img')->getClientOriginalName();
            }

            $about->save();
            return redirect()->to('/admin/about')->with('about_success', 'About data has been updated successfully');

        } catch (Exception $e) {
            return redirect()->to('/admin/about')->with('about_fail', 'An unexpected error occured');
        }
    }

}
