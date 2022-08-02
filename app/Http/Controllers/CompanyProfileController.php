<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Profile;
use App\Models\Values;
use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    public function index ()
    {
        $profile = Profile::first();
        $values = Values::get();
        $home = Home::first();
        return view('client.compProf', compact(['profile', 'values', 'home']));
    }

}
