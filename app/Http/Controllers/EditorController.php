<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

class EditorController extends Controller
{
    //LIST OF EDITORS
    public function index(User $user)
    {
        $role = Role::where('name', 'editor')->firstOrFail();
        $editor = $role->user;
        return view('admin.editor_list',[
            'editors' => $editor
        ]);
    }

    //DOWNGRADE TO USER
    public function upgrade(User $user)
    {

        $role = Role::select('id')->where('name', 'user')->first();

        $user->role()->sync($role);

        return back();
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }
}
