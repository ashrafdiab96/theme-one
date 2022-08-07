<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminBlogsController extends Controller
{
    public function index ()
    {
        return view();
    }

    public function save (Request $request)
    {}

    public function edit (Request $request, $id)
    {}

    public function update (Request $request, $id)
    {}

    public function delete ($id)
    {}

}
