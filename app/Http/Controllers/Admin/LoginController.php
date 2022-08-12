<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    /**
     * index function
     * show login page
     * @return void
     */
    public function index ()
    {
        return Auth::check() ? redirect()->to('/admin/dashboard') : view('auth.login');
    }

    /**
     * login function
     * handle login to admin dashboard
     * @param Request $request
     * @return redirect
     */
    public function login (Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->to('/admin/dashboard');
        }

        return back()->with(['login_error' => 'Incorrect email or password']);
    }

    /**
     * logout function
     * handle logout
     * @return redirect
     */
    public function logout ()
    {
        Auth::logout();
        return redirect()->to('/admin/login');
    }

}
