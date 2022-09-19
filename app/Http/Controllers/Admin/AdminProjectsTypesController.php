<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectsTypes;
use Illuminate\Http\Request;

class AdminProjectsTypesController extends Controller
{
    /**
     * index function
     * show projects types admin page
     * @return view
     */
    public function index ()
    {
        $projets = ProjectsTypes::get();
        return view('admin.projectsTypes.types', compact('projets'));
    }

    /**
     * new function
     * show add project type page
     * @return view
     */
    public function new ()
    {
        return view('admin.projectsTypes.add');
    }

    /**
     * save function
     * save new project type
     * @param Request $request
     * @return response
     */
    public function save (Request $request)
    {
        try {
            $project = new ProjectsTypes();
            $project->name_ar = $request->name_ar;
            $project->name_en = $request->name_en;
            $project->save();
            return redirect('/admin/projects-types')->with('proj_type_success', 'Project type has been added successfully');

        } catch(\Exception $e) {
            return redirect('/admin/projects-types')->with('proj_type_fail', 'An unexpected error occured');
        }
    }

    /**
     * edit function
     * show projects types edit page
     * @param integer $id
     * @return view
     */
    public function edit ($id)
    {
        $project = ProjectsTypes::findOrFail($id);
        return view('admin.projectsTypes.edit', compact('project'));
    }

    /**
     * update function
     * update project type
     * @param Request $request
     * @param integer $id
     * @return response
     */
    public function update (Request $request, $id)
    {
        try {
            $project = ProjectsTypes::findOrFail($id);
            $project->name_ar = $request->name_ar;
            $project->name_en = $request->name_en;
            $project->save();
            return redirect('/admin/projects-types')->with('proj_type_updated', 'Project type has been updated successfully');

        } catch(\Exception $e) {
            return redirect('/admin/projects-types')->with('proj_type_not_updated', 'An unexpected error occured');
        }
    }

    /**
     * delete function
     * delete project type
     * @param integer $id
     * @return response
     */
    public function delete ($id)
    {
        try {
            $project = ProjectsTypes::findOrFail($id);
            $project->delete();
            return redirect('/admin/projects-types')->with('proj_type_deleted', 'Project type has been deleted successfully');

        } catch(\Exception $e) {
            return redirect('/admin/projects-types')->with('proj_type_not_deleted', 'An unexpected error occured');
        }
    }

}
