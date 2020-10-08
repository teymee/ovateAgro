<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use JD\Cloudder\Facades\Cloudder;

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

    public function update(User $user, Request $request){

            //REGULAR HOSTING

//        if (request()->hasFile('avatar')){
//            $firstImage = $user->avatar;
//            if($firstImage && $firstImage !== 'avatar/avatar.png'){
//                Storage::delete('/public/'.$firstImage);
//            }
//            $newAvatar = request('avatar')->store('avatar', 'public');
//        }else{
//            $newAvatar='avatar/avatar.png';
//        }


        if(request()->hasFile('avatar')){

//dd(auth()->user()->avatar != null && auth()->user()->avatar != 'avatar_f5fe4a');

            if(!(auth()->user()->avatar != null && auth()->user()->avatar != 'avatar_f5fe4a')){
                            Cloudder::destroyImage(auth()->user()->avatarId);
            }



            $images = $request->file('avatar');

            $name = $request->file('avatar')->getClientOriginalName();


            $image_name = $request->file('avatar')->getRealPath();

            Cloudder::upload($image_name, null);

            list($width, $height) = getimagesize($image_name);

            $image_url= Cloudder::show(Cloudder::getPublicId(), ["width" => $width, "height"=>$height]);
            $avatarId= Cloudder::getPublicId();
            //save to uploads directory
            $images->move(public_path("uploads"), $name);

            //Save avatar



            $user->avatar = $request->file('avatar')->getClientOriginalName();

            $user->avatarId = $avatarId;
            $user->save();



        }

        $validateRequest= request()->validate([
          'name'    => 'required',
          'email'   => 'required|email',

       ]);

        $user->update($validateRequest);
//        $user->avatar = $newAvatar;
        $user->about = request('about');
        $user->save();


        return back();



    }
}
