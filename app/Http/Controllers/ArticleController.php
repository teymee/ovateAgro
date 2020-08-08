<?php

namespace App\Http\Controllers;
use App\Article;
use App\Comment;
use App\Tag;
use App\User;
use Illuminate\Http\Request;



class ArticleController extends Controller
{
    public function index()
    {
        if (request('tag')){
            $article = Tag::where('name',request('tag'))->firstorFail()->article;

        }else{
            $article = Article::latest()->paginate(3);
        }

        $tag = Tag::all()->take(6);
        return view('blog',[
            'articles' => $article,
            'tags'   => $tag
         ]);
    }

    public function create(){


        $tags = Tag::all();
        return view('admin.create',[
            'tags' => $tags
        ]);

    }

    public function store(Article $article){

//        dd(request('images'));
        $this->validateRequest();
        if(request()->hasFile('images')){
            $fileNameToStore = request('images')->store('article_images', 'public');
        }else{
            $fileNameToStore = 'article_images/noimages.png';
        }


        $article = new Article(request(['title', 'excerpt', 'body', 'images']));
        $article->user_id = auth()->user()->id;
        $article -> images = $fileNameToStore;


        $article->save();

        $article->tag()->attach(request('tags'));

        return redirect('/blog');

    }


    public function show(Article $article, User $user)
    {

        $randomArticle = Article::inRandomOrder()->take(3)->get();
        $tags = Tag::all();


        return view('show', [
            'article'   => $article,
            'randomArticles'  => $randomArticle,
            'tags' => $tags,
            'user' => $user
        ]);

    }

    public function edit(Article $article){



    }

    public function update(){

    }

    public function delete(){

    }

    protected function validateRequest(){

        return request()->validate([
            'title'   => 'required',
            'excerpt' => 'required',
            'body'    => 'required',
            'images'  => 'nullable',
            'tags'    => 'exists:tags,id'
    ]);
    }

}
