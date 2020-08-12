<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //SHOWING REGISTERED USERS
    public function index(User $user)
    {
        $currentUser = auth()->user()->role[0]->name;

        if($currentUser == 'superadmin'){
            $users = User::latest()->get();
//            return $users;

            return view('admin.users_list',
                [
                    'users' => $users
                ]);
        }

        $role = Role::where('name', 'user')->firstOrFail();
//        dd($role);
        $users = $role->user;

        return view('admin.users_list',
            [
                'users' => $users
            ]);
    }

    public function upgrade(User $user)
    {

        $role = Role::select('id')->where('name', 'editor')->first();

        $user->role()->sync($role);

        return back();
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }


}
