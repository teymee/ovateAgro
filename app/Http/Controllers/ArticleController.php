<?php

namespace App\Http\Controllers;
use App\Article;
use App\Comment;
use App\Product;
use App\Tag;
use App\User;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;


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

    public function store(Article $article, Request $request){


        //REGULAR HOSTING
        //        dd(request('images'));
//        $this->validateRequest();
//        if(request()->hasFile('images')){
//            $fileNameToStore = request('images')->store('article_images', 'public');
//        }else{
//            $fileNameToStore = 'article_images/noimages.png';
//        }
//
//
//
//        $article = new Article(request(['title', 'excerpt', 'body', 'images']));
//        $article->user_id = auth()->user()->id;
//        $article -> images = $fileNameToStore;
//
//
//        $article->save();
//
//        $article->tag()->attach(request('tags'));
//
//        return redirect('/blog');
//




        //CLOUDINARY

        $images = $request->file('images');

        $name = $request->file('images')->getClientOriginalName();

        $image_name = $request->file('images')->getRealPath();

        Cloudder::upload($image_name, null);

        list($width, $height) = getimagesize($image_name);

        $image_url= Cloudder::show(Cloudder::getPublicId(), ["width" => $width, "height"=>$height]);
        $imageId= Cloudder::getPublicId();
        //save to uploads directory
        $images->move(public_path("uploads"), $name);

        //Save images
//        $this->saveImages($request, $image_url);
        $article = new Article(request(['title', 'excerpt', 'body', 'images']));

        $article->images = $request->file('images')->getClientOriginalName();
        $article->imagesId = $imageId;
//        $product->image_url = $image_url;

        $article->user_id = auth()->user()->id;
      


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
//            'images'  => 'nullable',
            'images'=>'nullable|mimes:jpeg,bmp,jpg,png|between:1, 6000',
            'tags'    => 'exists:tags,id'
    ]);
    }

}
