<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use App\Models\Services;
use App\Models\ServicesImages;
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
        $home = Home::first();
        return view('admin.services.services', compact(['services', 'home']));
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

            $images = $request->file('images');
            if($images) {
                foreach($images as $img) {
                    $image_name = time().'_'.$img->getClientOriginalName();
                    $filePath = $img->move('assets/upload/services_images', $image_name);
                    $service_img = new ServicesImages();
                    $service_img->service_id = $service->id;
                    $service_img->image = time().'_'.$img->getClientOriginalName();
                    $service_img->save();
                }
            }

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

            $service_imgs = ServicesImages::where('service_id', $id)->get();
            if($service_imgs) {
                foreach($service_imgs as $img) {
                    $serv_imgs = public_path('assets/upload/services_images/'.$img->image);
                    unlink($serv_imgs);
                    $img->delete();
                }
            }

            $service->delete();
            return redirect()->to('/admin/services')->with('services_deleted', 'Service has been deleted successfully');
        } catch(Exception $e) {
            return redirect()->to('/admin/services')->with('services_not_deleted', 'An unexpected error occured');
        }
    }

    /**
     * editBackground function
     * edit service page background
     * @param integer $id
     * @return view
     */
    public function editBackground ()
    {
        return view('admin.services.edit-background');
    }

    /**
     * updateBackground function
     * update service page background
     * @param Request $request
     * @param integer $id
     * @return redirect
     */
    public function updateBackground (Request $request)
    {
        try {
            $home = Home::first();
            if($request->hasFile('background')) {
                $service_bc = public_path('assets/upload/services/'.$home->services_bc);
                if(isset($service_bc)) {
                    unlink($service_bc);
                }
                $image_name = time().'_'.$request->file('background')->getClientOriginalName();
                $filePath = $request->file('background')->move('assets/upload/services', $image_name);
                $home->services_bc = time().'_'.$request->file('background')->getClientOriginalName();
            }
            $home->save();
            return redirect()->to('/admin/services')->with('bc_success', 'Services page background has been updated successfully');

        } catch(Exception $e) {
            return redirect()->to('/admin/services')->with('bc_fail', 'An unexpected error occured');
        }
    }

    /**
     * images function
     * show service images page
     * @param integer $id
     * @return view
     */
    public function images ($id)
    {
        $images = ServicesImages::where('service_id', $id)->get();
        return view('admin.services.images', compact('images'));
    }

    /**
     * addImage function
     * add new service image
     * @param integer $id
     * @return view
     */
    public function addImage ($id)
    {
        return view('admin.services.add-img', compact('id'));
    }

    /**
     * saveImage function
     * save new service image
     * @param Request $request
     * @param integer $id
     * @return redirect
     */
    public function saveImage (Request $request, $id)
    {
        try {
            if($request->hasFile('image')) {
                $img = new ServicesImages();
                $img->service_id = $id;
                $image_name = time().'_'.$request->file('image')->getClientOriginalName();
                $filePath = $request->file('image')->move('assets/upload/services_images', $image_name);
                $img->image = time().'_'.$request->file('image')->getClientOriginalName();
                $img->save();
                return redirect()->to('/admin/service/gallery/'.$id)->with('img_success', 'Image has been added successfully');

            }
        } catch(Exception $e) {
            return redirect()->to('/admin/service/gallery/'.$id)->with('img_fail', 'An unexpected error occured');
        }
    }

    /**
     * editImage function
     * edit service image
     * @param integer $id
     * @return view
     */
    public function editImage ($id)
    {
        $img = ServicesImages::findOrFail($id);
        return view('admin.services.edit-img', compact('img'));
    }

    /**
     * updateImage function
     * update service image
     * @param Request $request
     * @param integer $id
     * @return redirect
     */
    public function updateImage (Request $request, $id)
    {
        try {
            if($request->hasFile('image')) {
                $img = ServicesImages::findOrFail($id);
                $old_img = public_path('assets/upload/services_images/'.$img->image);
                if($old_img) {
                    unlink($old_img);
                }
                $image_name = time().'_'.$request->file('image')->getClientOriginalName();
                $filePath = $request->file('image')->move('assets/upload/services_images', $image_name);
                $img->image = time().'_'.$request->file('image')->getClientOriginalName();
                $img->save();
                return redirect()->to('/admin/service/gallery/'.$img->service_id)->with('img_updated', 'Image has been updated successfully');

            }
        } catch(Exception $e) {
            return redirect()->to('/admin/service/gallery/'.$$img->service_id)->with('img_not_updated', 'An unexpected error occured');
        }
    }

    /**
     * deleteImage function
     * delete service image
     * @param integer $id
     * @return redirect
     */
    public function deleteImage ($id)
    {
        try {
            $img = ServicesImages::findOrFail($id);
            $service_img = public_path('assets/upload/services_images/').$img->image;
            if(isset($service_img)) {
                unlink($service_img);
            }

            $img->delete();
            return redirect()->to('/admin/service/gallery/'.$img->service_id)->with('img_deleted', 'Image has been deleted successfully');
        } catch(Exception $e) {
            return redirect()->to('/admin/servicegallery/'.$img->service_id)->with('img_not_deleted', 'An unexpected error occured');
        }
    }

}
