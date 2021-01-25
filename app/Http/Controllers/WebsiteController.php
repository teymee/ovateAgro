<?php

namespace App\Http\Controllers;

use App\Article;
use App\Event;
use App\Product;
use App\Tag;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class WebsiteController extends Controller
{

    public function home( Tag $tag,Article $article,User $user){
        if( Str::contains((str_replace(url('/'), '', url()->previous())), '/thank-You/')){
            \Cart::clear();
        }
        $articles = Article::inRandomOrder()->take(3)->get();
        $person = Event::where('Agro_Person' , true)->orderBy('created_at', 'desc')->first();
        $tags = Tag::all();


        return view('welcome',[
            'tags' => $tags,
            'articles'   => $articles,
            'person' => $person
        ]);
    }

    public function shop(){
        if( Str::contains((str_replace(url('/'), '', url()->previous())), '/thank-You/')){
            \Cart::clear();
        }
        $tags = Tag::all();
        $products = Product::inRandomOrder()->paginate(9);

        return view('shop', compact('tags','products'));
    }

    public function search(){
        $query = \request('search');
        $tags = Tag::all();
        $products = Product::where('name', 'like', "%".$query."%")->paginate(9);

        return view('shop', compact('tags','products'));
    }

    public function detail($products){
        if( Str::contains((str_replace(url('/'), '', url()->previous())), '/thank-You/')){
            \Cart::clear();
        }
        $tags = Tag::all();
        $product = Product::where('name', $products)->first();
        $randoms = Product::where('name','!=', $products)->inRandomOrder()->take(3)->get();

        return view('product_detail', compact('tags','product','randoms'));
    }

    public function events(Event $event)
    {
        if( Str::contains((str_replace(url('/'), '', url()->previous())), '/thank-You/')){
            \Cart::clear();
        }

        $event = Event::where('Agro_Person' , false)->orderBy('created_at', 'desc')->paginate(6);
        $tag = Tag::all()->take(6);


        return view('events', [
            'events' => $event,
            'tags' => $tag
        ]);
    }

    public function contact(){
        if( Str::contains((str_replace(url('/'), '', url()->previous())), '/thank-You/')){
            \Cart::clear();
        }
        $tag = Tag::all()->take(6);
        return view('contact', [
            'tags'   => $tag
        ]);
    }
}
