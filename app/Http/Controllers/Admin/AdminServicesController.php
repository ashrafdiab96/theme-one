<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Exception;
use Illuminate\Http\Request;

class AdminServicesController extends Controller
{
    /**
     * index function
     * show services page
     * @return view
     */
    public function index ()
    {
        $services = Services::all();
        return view('admin.services.services', compact('services'));
    }

    /**
     * new function
     * new service page
     * @return view
     */
    public function new ()
    {
        return view('admin.services.new');
    }

    /**
     * save function
     * save new service
     * @param Request $request
     * @return redirect
     */
    public function save (Request $request)
    {
        try {
            $service = new Services();
            $service->name_ar = $request->name_ar;
            $service->name_en = $request->name_en;
            $service->desc_ar = $request->desc_ar;
            $service->desc_en = $request->desc_en;
            if($request->hasFile('image')) {
                $image_name = time().'_'.$request->file('image')->getClientOriginalName();
                $filePath = $request->file('image')->move('assets/upload/services', $image_name);
                $service->image = time().'_'.$request->file('image')->getClientOriginalName();
            }
            if($request->hasFile('background')) {
                $image_name = time().'_'.$request->file('background')->getClientOriginalName();
                $filePath = $request->file('background')->move('assets/upload/services', $image_name);
                $service->background = time().'_'.$request->file('background')->getClientOriginalName();
            }
            $service->save();
            return redirect()->to('/admin/services')->with('services_success', 'Service added successfully');

        } catch(Exception $e) {
            return redirect()->to('/admin/services')->with('services_fail', 'An unexpected error occured');
        }
    }

    /**
     * edit function
     * edit seervice page
     * @param Request $request
     * @param [type] $id
     * @return void
     */
    public function edit (Request $request, $id)
    {
        $service = Services::findOrFail($id);
        return view('admin.services.edit', compact('service'));
    }

    /**
     * update function
     * update service data
     * @param Request $request
     * @param integer $id
     * @return redirect
     */
    public function update (Request $request, $id)
    {
        try {
            $service = Services::findOrFail($id);
            $service->name_ar = $request->name_ar;
            $service->name_en = $request->name_en;
            $service->desc_ar = $request->desc_ar;
            $service->desc_en = $request->desc_en;
            if($request->hasFile('image')) {
                $old_img = public_path('assets/upload/services/').$service->image;
                if(isset($old_img)) {
                    unlink($old_img);
                }
                $image_name = time().'_'.$request->file('image')->getClientOriginalName();
                $filePath = $request->file('image')->move('assets/upload/services', $image_name);
                $service->image = time().'_'.$request->file('image')->getClientOriginalName();
            }
            if($request->hasFile('background')) {
                $old_img = public_path('assets/upload/services/').$service->background;
                if(isset($old_img)) {
                    unlink($old_img);
                }
                $image_name = time().'_'.$request->file('background')->getClientOriginalName();
                $filePath = $request->file('background')->move('assets/upload/services', $image_name);
                $service->background = time().'_'.$request->file('background')->getClientOriginalName();
            }
            $service->save();
            return redirect()->to('/admin/services')->with('service_updated', 'Service added successfully');

        } catch(Exception $e) {
            return redirect()->to('/admin/services')->with('service_not_updated', 'An unexpected error occured');
        }
    }

    /**
     * delete function
     * delete service
     * @param integer $id
     * @return redirect
     */
    public function delete ($id)
    {
        try {
            $service = Services::findOrFail($id);
            $service_bc = public_path('assets/upload/services/').$service->background;
            $service_iag = public_path('assets/upload/services/').$service->image;
            if(isset($service_bc)) {
                unlink($service_bc);
            }
            if(isset($service_iag)) {
                unlink($service_iag);
            }
            $service->delete();
            return redirect()->to('/admin/services')->with('services_deleted', 'Service has been deleted successfully');
        } catch(Exception $e) {
            return redirect()->to('/admin/services')->with('services_not_deleted', 'An unexpected error occured');
        }
    }

}
