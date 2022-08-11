<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * index function
     * show profile page
     * @return view
     */
    public function index ()
    {
        $user = Auth::user();
        return view('admin.users.profile', compact('user'));
    }

    /**
     * update function
     * update profile data
     * @param Request $request
     * @return redirect
     */
    public function update (Request $request)
    {
        try {
            $user = User::findOrFail(Auth::user()->id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->save();
            return redirect('/admin/user/profile')->with('prof_success', 'Profile data has been updated successfully');

        } catch(Exception $e) {
            return redirect('/admin/user/profile')->with('prof_error', 'An unexpected error occured');
        }
    }

    public function updatePassword (Request $request)
    {
        try {
            $user = User::findOrFail(Auth::user()->id);
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect('/admin/user/profile')->with('prof_pass_success', 'Password has been updated successfully');

        } catch(Exception $e) {
            return redirect('/admin/user/profile')->with('prof_pass_error', 'An unexpected error occured');
        }
    }


}
