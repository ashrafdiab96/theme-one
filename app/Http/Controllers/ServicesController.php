<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Home;
use App\Models\Services;
use App\Models\ServicesImages;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * index function
     * show services page
     * @return view
     */
    public function index ()
    {
        $services = Services::get();
        $home = Home::first();
        return view('client.services', compact(['services', 'home']));
    }

    /**
     * service function
     * show specific service page
     * @param integer $id
     * @return view
     */
    public function service ($id)
    {
        $service = Services::where('id', $id)->first();
        $first_services = Services::take(15)->get();
        $service_imgs = ServicesImages::where('service_id', $id)->get();
        $last_blogs = Blogs::orderBy('id', 'desc')->take(2)->get();
        return view('client.service', compact([
            'service', 'service_imgs', 'first_services', 'last_blogs'
        ]));
    }

}
