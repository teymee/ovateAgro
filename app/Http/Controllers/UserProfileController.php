<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserProfileController extends Controller
{

    public function index(){
        if( Str::contains((str_replace(url('/'), '', url()->previous())), '/thank-You/')){
            \Cart::clear();
        }

        $tags = Tag::all();
        return view('user_profile', compact('tags'));
    }

    public function update()
    {
//        $user = auth()->user();
//       dd(   $user->password = Hash::make(request('password')));

        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.auth()->id()],
            'phone' => ['nullable', 'string',  'unique:users,phone,'.auth()->id()],
            'password' => ['sometimes', 'nullable','string', 'min:8', 'confirmed'],
        ]);
        $user = auth()->user();
        $input = request()->except('password','password_confirmation');

        if(request('password') == null){
            $user->fill($input)->save();
            return back()->with('session_message', 'Profile updated successfully');
        }

        $user->password = Hash::make(request('password'));
        $user->fill($input)->save();
        return back()->with('session_message', 'Profile (and password) updated successfully');
    }
}
