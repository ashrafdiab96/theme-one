<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\Projects;
use App\Models\Services;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * index function
     * show admin dashboard page
     * @return view
     */
    public function index ()
    {
        $services = Services::all();
        $services_count = count($services);
        $projects = Projects::all();
        $projects_count = count($projects);
        $blogs = Blogs::all();
        $blogs_count = count($blogs);
        $last_services = Services::orderBy('id', 'desc')->take(5)->get();
        $last_projects = Projects::orderBy('id', 'desc')->take(5)->get();
        $last_blogs = Blogs::orderBy('id', 'desc')->take(5)->get();
        $last_users = User::orderBy('id', 'desc')->take(5)->get();
        return view('admin.dashboard', compact([
            'services_count', 'projects_count', 'blogs_count', 'last_services',
            'last_projects', 'last_blogs', 'last_users'
        ]));
    }

}
