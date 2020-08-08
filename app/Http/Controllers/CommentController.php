<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Comment $comment)
    {
        if(auth()->user()){
            $validateRequest = request()->validate([
                'name' => 'required',
                'body' => 'required',
                'article_id' => 'exists:articles,id'
            ]);

            Comment::create($validateRequest);
            return back();
        }else{
            return redirect('/login');
        }





    }
}
