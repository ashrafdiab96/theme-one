<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use App\Models\Projects;
use App\Models\ProjectsImages;
use Illuminate\Http\Request;

class AdminProjectsController extends Controller
{
    /**
     * index function
     * show projects page
     * @return view
     */
    public function index ()
    {
        $projects = Projects::all();
        $home = Home::first();
        return view('admin.projects.projects', compact(['projects', 'home']));
    }

    /**
     * new function
     * show new project page
     * @return view
     */
    public function new ()
    {
        return view('admin.projects.new');
    }

    public function save (Request $request)
    {
        try {
            $project = new Projects();
            $project->name_ar = $request->name_ar;
            $project->name_en = $request->name_en;
            $project->desc_ar = $request->desc_ar;
            $project->desc_en = $request->desc_en;
            if($request->hasFile('image')) {
                $image_name = time().'_'.$request->file('image')->getClientOriginalName();
                $filePath = $request->file('image')->move('assets/upload/projects', $image_name);
                $project->image = time().'_'.$request->file('image')->getClientOriginalName();
            }
            if($request->hasFile('background')) {
                $image_name = time().'_'.$request->file('background')->getClientOriginalName();
                $filePath = $request->file('background')->move('assets/upload/projects', $image_name);
                $project->background = time().'_'.$request->file('background')->getClientOriginalName();
            }
            $project->save();

            $images = $request->file('images');
            if($images) {
                foreach($images as $img) {
                    $image_name = time().'_'.$img->getClientOriginalName();
                    $filePath = $img->move('assets/upload/projects_images', $image_name);
                    $project_img = new ProjectsImages();
                    $project_img->project_id = $project->id;
                    $project_img->image = time().'_'.$img->getClientOriginalName();
                    $project_img->save();
                }
            }

            return redirect()->to('/admin/projects')->with('project_success', 'Project added successfully');

        } catch(Exception $e) {
            return redirect()->to('/admin/projects')->with('project_fail', 'An unexpected error occured');
        }
    }

    /**
     * edit function
     * show edit project page
     * @param integer $id
     * @return view
     */
    public function edit ($id)
    {
        $project = Projects::findOrFail($id);
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * update function
     * update project data
     * @param Request $request
     * @param integer $id
     * @return redirect
     */
    public function update (Request $request, $id)
    {
        try {
            $project = Projects::findOrFail($id);
            $project->name_ar = $request->name_ar;
            $project->name_en = $request->name_en;
            $project->desc_ar = $request->desc_ar;
            $project->desc_en = $request->desc_en;
            if($request->hasFile('image')) {
                $old_img = public_path('assets/upload/projects/'.$project->image);
                if(isset($project->image)) {
                    // unlink($old_img);
                }
                $image_name = time().'_'.$request->file('image')->getClientOriginalName();
                $filePath = $request->file('image')->move('assets/upload/projects', $image_name);
                $project->image = time().'_'.$request->file('image')->getClientOriginalName();
            }
            if($request->hasFile('background')) {
                $old_img = public_path('assets/upload/projects/'.$project->background);
                if(isset($project->background)) {
                    // unlink($old_img);
                }
                $image_name = time().'_'.$request->file('background')->getClientOriginalName();
                $filePath = $request->file('background')->move('assets/upload/projects', $image_name);
                $project->background = time().'_'.$request->file('background')->getClientOriginalName();
            }
            $project->save();
            return redirect()->to('/admin/projects')->with('project_updated', 'Project added successfully');

        } catch(Exception $e) {
            return redirect()->to('/admin/projects')->with('project_not_updated', 'An unexpected error occured');
        }
    }

    /**
     * delete function
     * delete project
     * @param integer $id
     * @return redirect
     */
    public function delete ($id)
    {
        try {
            $project = Projects::findOrFail($id);
            $project_bc = public_path('assets/upload/projects/'.$project->background);
            $project_iag = public_path('assets/upload/projects/'.$project->image);
            if(isset($project->background)) {
                // unlink($project_bc);
            }
            if(isset($project->image)) {
                // unlink($project_iag);
            }

            $project_imgs = ProjectsImages::where('project_id', $id)->get();
            if($project_imgs) {
                foreach($project_imgs as $img) {
                    $proj_imgs = public_path('assets/upload/projects_images/'.$img->image);
                    // unlink($proj_imgs);
                    $img->delete();
                }
            }

            $project->delete();
            return redirect()->to('/admin/projects')->with('project_deleted', 'Projects has been deleted successfully');
        } catch(Exception $e) {
            return redirect()->to('/admin/projects')->with('project_not_deleted', 'An unexpected error occured: '. $e->getMessage());
        }
    }

    /**
     * editBackground function
     * edit project page background
     * @param integer $id
     * @return view
     */
    public function editBackground ()
    {
        return view('admin.projects.edit-background');
    }

    /**
     * updateBackground function
     * update projects page background
     * @param Request $request
     * @param integer $id
     * @return redirect
     */
    public function updateBackground (Request $request)
    {
        try {
            $home = Home::first();
            if($request->hasFile('background')) {
                $project_bc = public_path('assets/upload/projects/'.$home->projects_bc);
                if(isset($home->projects_bc)) {
                    // unlink($project_bc);
                }
                $image_name = time().'_'.$request->file('background')->getClientOriginalName();
                $filePath = $request->file('background')->move('assets/upload/projects', $image_name);
                $home->projects_bc = time().'_'.$request->file('background')->getClientOriginalName();
            }
            $home->save();
            return redirect()->to('/admin/projects')->with('bc_success', 'Projects page background has been updated successfully');

        } catch(Exception $e) {
            return redirect()->to('/admin/projects')->with('bc_fail', 'An unexpected error occured');
        }
    }

    /**
     * images function
     * show porject images page
     * @param integer $id
     * @return view
     */
    public function images ($id)
    {
        $images = ProjectsImages::where('project_id', $id)->get();
        return view('admin.projects.images', compact('images'));
    }

    /**
     * addImage function
     * add new porject image
     * @param integer $id
     * @return view
     */
    public function addImage ($id)
    {
        return view('admin.projects.add-img', compact('id'));
    }

    /**
     * saveImage function
     * save new project image
     * @param Request $request
     * @param integer $id
     * @return redirect
     */
    public function saveImage (Request $request, $id)
    {
        try {
            if($request->hasFile('image')) {
                $img = new ProjectsImages();
                $img->project_id = $id;
                $image_name = time().'_'.$request->file('image')->getClientOriginalName();
                $filePath = $request->file('image')->move('assets/upload/projects_images', $image_name);
                $img->image = time().'_'.$request->file('image')->getClientOriginalName();
                $img->save();
                return redirect()->to('/admin/project/gallery/'.$id)->with('img_success', 'Image has been added successfully');

            }
        } catch(Exception $e) {
            return redirect()->to('/admin/project/gallery/'.$id)->with('img_fail', 'An unexpected error occured');
        }
    }

    /**
     * editImage function
     * edit project image
     * @param integer $id
     * @return view
     */
    public function editImage ($id)
    {
        $img = ProjectsImages::findOrFail($id);
        return view('admin.projects.edit-img', compact('img'));
    }

    /**
     * updateImage function
     * update project image
     * @param Request $request
     * @param integer $id
     * @return redirect
     */
    public function updateImage (Request $request, $id)
    {
        try {
            if($request->hasFile('image')) {
                $img = ProjectsImages::findOrFail($id);
                $old_img = public_path('assets/upload/projects_images/'.$img->image);
                if($img->image) {
                    // unlink($old_img);
                }
                $image_name = time().'_'.$request->file('image')->getClientOriginalName();
                $filePath = $request->file('image')->move('assets/upload/projects_images', $image_name);
                $img->image = time().'_'.$request->file('image')->getClientOriginalName();
                $img->save();
                return redirect()->to('/admin/project/gallery/'.$img->project_id)->with('img_updated', 'Image has been updated successfully');

            }
        } catch(Exception $e) {
            return redirect()->to('/admin/project/gallery/'.$$img->project_id)->with('img_not_updated', 'An unexpected error occured');
        }
    }

    /**
     * deleteImage function
     * delete project image
     * @param integer $id
     * @return redirect
     */
    public function deleteImage ($id)
    {
        try {
            $img = ProjectsImages::findOrFail($id);
            $project_img = public_path('assets/upload/projects_images/'.$img->image);
            if(isset($img->image)) {
                // unlink($project_img);
            }

            $img->delete();
            return redirect()->to('/admin/project/gallery/'.$img->project_id)->with('img_deleted', 'Image has been deleted successfully');
        } catch(Exception $e) {
            return redirect()->to('/admin/project/gallery/'.$img->project_id)->with('img_not_deleted', 'An unexpected error occured');
        }
    }

}
