<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
       return view('admin.profile');

    }

    public function update(User $user){


        if (request()->hasFile('avatar')){
            $firstImage = $user->avatar;
            if($firstImage && $firstImage !== 'avatar/avatar.png'){
                Storage::delete('/public/'.$firstImage);
            }
            $newAvatar = request('avatar')->store('avatar', 'public');
        }else{
            $newAvatar='avatar/avatar.png';
        }


        $validateRequest= request()->validate([
          'name'    => 'required',
          'email'   => 'required|email',

       ]);

        $user->update($validateRequest);
        $user->avatar = $newAvatar;
        $user->about = request('about');
        $user->save();


        return back();



    }
}
