<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Exception;
use Illuminate\Http\Request;

class AdminSliderController extends Controller
{
    /**
     * index function
     * show slider page
     * @return view
     */
    public function index ()
    {
        $slider = Slider::all();
        return view('admin.slider.slider', compact('slider'));
    }

    /**
     * new function
     * add new slider
     * @return view
     */
    public function new ()
    {
        return view('admin.slider.new');
    }

    /**
     * save function
     * save new slider
     * @param Request $request
     * @return redirect
     */
    public function save (Request $request)
    {
        try {
            $slider = new Slider();
            $slider->title_ar = $request->title_ar;
            $slider->title_en = $request->title_en;
            $slider->desc_ar = $request->desc_ar;
            $slider->desc_en = $request->desc_en;
            if($request->hasFile('image')) {
                $image_name = time().'_'.$request->file('image')->getClientOriginalName();
                $file_path = $request->file('image')->move('assets/upload/slider', $image_name);
                $slider->image = time().'_'.$request->file('image')->getClientOriginalName();
            }
            $slider->save();
            return redirect('/admin/slider')->with('slider_success', 'Slider has been added successfully');

        } catch(Exception $e) {
            return redirect('/admin/slider')->with('slider_fail', 'An unexpected error occured');
        }
    }

    /**
     * edit function
     * edit slider page
     * @param integer $id
     * @return view
     */
    public function edit ($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * update function
     * update slider data
     * @param Request $request
     * @param integer $id
     * @return redirect
     */
    public function update (Request $request, $id)
    {
        try {
            $slider = Slider::findOrFail($id);
            $slider->title_ar = $request->title_ar;
            $slider->title_en = $request->title_en;
            $slider->desc_ar = $request->desc_ar;
            $slider->desc_en = $request->desc_en;
            if($request->hasFile('image')) {
                $old_img = public_path('assets/upload/slider/'.$slider->image);
                if(isset($slider->image)) {
                    // unlink($old_img);
                }
                $image_name = time().'_'.$request->file('image')->getClientOriginalName();
                $file_path = $request->file('image')->move('assets/upload/slider', $image_name);
                $slider->image = time().'_'.$request->file('image')->getClientOriginalName();
            }
            $slider->save();
            return redirect('/admin/slider')->with('slider_updated', 'Slider has been updated successfully');

        } catch(Exception $e) {
            return redirect('/admin/slider')->with('slider_not_updated', 'An unexpected error occured');
        }
    }

    /**
     * delete function
     * delete slider
     * @param integer $id
     * @return redirect
     */
    public function delete ($id)
    {
        try {
            $slider = Slider::findOrFail($id);
            $img = public_path('assets/upload/slider/'.$slider->image);
            if(isset($slider->image)) {
                // unlink($img);
            }
            $slider->delete();
            return redirect('/admin/slider')->with('slider_deleted', 'Slider has been deleted successfully');

        } catch(Exception $e) {
            return redirect('/admin/slider')->with('slider_not_deleted', 'An unexpected error occured');
        }
    }

}
