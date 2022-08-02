<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        return view('admin.dashboard');
    }

}
