<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Tag $tag)
    {
        $tag = Tag::paginate(10);

        return view('admin.tag_list',
            [
                'tags' => $tag
            ]);
    }



    public function store(Tag $tag){


        $tags = request()->validate([
           'name' => 'required'
        ]);


        Tag::create($tags);

        return back();

    }



    public function destroy(Tag $tag){

        $tag->delete();
        return back();

    }


}
