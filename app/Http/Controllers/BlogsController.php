<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\BlogsImages;
use App\Models\Home;
use App\Models\Projects;
use App\Models\Services;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    /**
     * index function
     * show blogs page
     * @return view
     */
    public function index ()
    {
        $blogs = Blogs::get();
        $home = Home::first();
        return view('client.blogs', compact(['blogs', 'home']));
    }

    /**
     * blog function
     * show specific blog page
     * @param integer $id
     * @return view
     */
    public function blog ($id)
    {
        $blog = Blogs::where('id', $id)->first();;
        $blog_imgs = BlogsImages::where('blog_id', $id)->get();
        $last_blogs = Blogs::orderBy('id', 'desc')->take(2)->get();
        $first_services = Services::take(10)->get();
        $first_projects = Projects::take(10)->get();
        return view('client.blog', compact([
            'blog', 'blog_imgs', 'first_projects', 'last_blogs', 'first_services'
        ]));
    }

}
