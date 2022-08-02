<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Home;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index ()
    {
        $about = About::first();
        $home = Home::first();
        return view('client.about', compact(['about', 'home']));
    }
}
