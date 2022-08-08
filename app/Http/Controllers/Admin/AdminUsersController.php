<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUsersController extends Controller
{
    /**
     * index function
     * show users page
     * @return view
     */
    public function index ()
    {
        $users = User::all();
        return view('admin.users.users', compact('users'));
    }

    /**
     * new function
     * show add new user page
     * @return view
     */
    public function new ()
    {
        return view('admin.users.new');
    }

    /**
     * save function
     * save new user
     * @param Request $request
     * @return redirect
     */
    public function save (Request $request)
    {
        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->to('/admin/users')->with('users_success', 'User has been saved successfully');
        } catch(Exception $e) {
            return redirect()->to('/admin/users')->with('users_fail', 'An unexpected error occured');
        }
    }

    /**
     * edit function
     * edit user data
     * @param integer $id
     * @return view
     */
    public function edit ($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * update function
     * update user data
     * @param Request $request
     * @param integer $id
     * @return redirect
     */
    public function update (Request $request, $id)
    {
        try {
            $user = User::findOrFail($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->save();
            return redirect()->to('/admin/users')->with('users_updated', 'User has been updated successfully');
        } catch(Exception $e) {
            return redirect()->to('/admin/users')->with('users_not_updated', 'An unexpected error occured');
        }
    }

    /**
     * editPassword function
     * edit user password
     * @param integer $id
     * @return view
     */
    public function editPassword ($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.update-pass', compact('user'));
    }

    /**
     * updatePassword function
     * update user password
     * @param Request $request
     * @param integer $id
     * @return redirect
     */
    public function updatePassword (Request $request, $id)
    {
        try {
            $user = User::findOrFail($id);
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->to('/admin/users')->with('user_pass_upd', 'User password has been updated successfully');
        } catch(Exception $e) {
            return redirect()->to('/admin/users')->with('users_pass_not_upd', 'An unexpected error occured');
        }
    }

    /**
     * delete function
     * delete user
     * @param integer $id
     * @return redirect
     */
    public function delete ($id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();
            return redirect()->to('/admin/users')->with('user_deleted', 'User has been deleted successfully');
        } catch(Exception $e) {
            return redirect()->to('/admin/users')->with('users_not_deleted', 'An unexpected error occured');
        }
    }

}
