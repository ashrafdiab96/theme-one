<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Contacts;
use App\Models\Home;
use App\Models\Projects;
use App\Models\Services;
use App\Models\Slider;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index ()
    {
        $home = Home::first();
        $slider = Slider::get();
        $services = Services::orderBy('id', 'desc')->take(6)->get();
        $projects = Projects::orderBy('id', 'desc')->take(4)->get();
        $blogs = Blogs::orderBy('id', 'desc')->take(2)->get();
        return view('client.home', compact([
            'home', 'projects', 'services', 'slider', 'blogs'
        ]));
    }

}
