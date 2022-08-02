<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Home;
use App\Models\Projects;
use App\Models\ProjectsImages;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * index function
     * show projects page
     * @return view
     */
    public function index ()
    {
        $projects = Projects::get();
        $home = Home::first();
        return view('client.projects', compact(['projects', 'home']));
    }

    /**
     * project function
     * show specific project page
     * @param integer $id
     * @return view
     */
    public function project ($id)
    {
        $project = Projects::where('id', $id)->first();
        $first_projects = Projects::take(15)->get();
        $project_imgs = ProjectsImages::where('project_id', $id)->get();
        $last_blogs = Blogs::orderBy('id', 'desc')->take(2)->get();
        return view('client.project', compact([
            'project', 'project_imgs', 'first_projects', 'last_blogs'
        ]));
    }

}
