<?php

namespace App\Http\Controllers;
use App\Article;
use App\Tag;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    // SHOW LIST OF ARTICLES IN ADMIN DASHBOARD
    public function index(Article $article, User $user)
    {
        $role = auth()->user()->role[0]->name;

        if($role == 'admin' || 'superadmin'){
            $articles = Article::latest()->paginate(10);


            return view('admin.list',
                [
                    'articles' => $articles
                ]);
        }else{
            $articles = Article::where('user_id', auth()->user()->id)->latest()->paginate(10);


            return view('admin.list',
                [
                    'articles' => $articles
                ]);
        }

    }

    public function edit(Article $article)
    {
        $role = auth()->user()->role[0]->name;
        if(auth()->user()->id == $article->user_id || $role == 'admin' || 'superadmin' ){
            $tags = Tag::all();
            return view('admin.edit',[
                'tags'     => $tags,
                'articles' => $article
            ]);
        }else{
            abort('404');
        }

    }

    public function update(Article $article)
    {

        if(request()->hasFile('images')){
            $firstImage = $article->images;
            if($firstImage){
                Storage::delete('/public/'.$firstImage);
            }
            $image = request('images')->store('article_images', 'public');
            $article->images = $image;

        }

        $validateRequest=  request()->validate([
            'title'     => 'required',
            'excerpt'   => 'required',
            'body'     => 'required',

        ]);


        $article->update($validateRequest);
        request()->validate([
           'tags' => 'exists:tags,id'
        ]);
        $article->tag()->sync(request('tags'));

        return redirect('/blog');

    }

    public function destroy(Article $article){
        $article->delete();
        return back();
    }



};


