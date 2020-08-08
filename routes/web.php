<?php

use App\Article;
use App\Event;
use App\Tag;
use App\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (Tag $tag,Article $article,User $user) {

    $articles = Article::inRandomOrder()->take(3)->get();
    $tags = Tag::all();



    return view('welcome',[
        'tags' => $tags,
        'articles'   => $articles
    ]);
});
Route::get('/events', function (Event $event) {

    $event = Event::latest()->paginate(3);
    $tag = Tag::all()->take(6);


    return view('events' , [
            'events' => $event,
             'tags'   => $tag
        ]);
});
Route::get('/contact', function () {
    $tag = Tag::all()->take(6);
    return view('contact', [
        'tags'   => $tag
    ]);
});
Route::get('/blog',                   'ArticleController@index');
Route::get('/article/{article}',      'ArticleController@show');
Route::get('/event/{event}',          'EventController@show');
Route::post("/comment",               'CommentController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth', 'can:allow_audience');;


//ADMIN AREA

Route::get('/admin', function () {
    $role = auth()->user()->role[0]->name;

    if($role == 'admin'|| 'superadmin'){
        $articles = Article::latest()->paginate(10);
       $articleNum = $articles->count();
       $userNum = User::all()->count();

       return view('admin.index',compact('articleNum','userNum'));

    }else{
        $articles = Article::where('user_id', auth()->user()->id)->latest()->paginate(10);
        $articlesNum = $articles->count();
        $eventNum= Event::all()->count();

        return view('admin.index',
            [
                'articleNum' => $articlesNum,
                'eventNum'   => $eventNum
            ]);
    }

})->middleware('auth', 'can:allow_audience');

Route::get('/admin/create',           'ArticleController@create')->middleware('auth', 'can:allow_audience');
Route::post('/admin',                 'ArticleController@store')->middleware('auth', 'can:allow_audience');
Route::post('/admin',                 'ArticleController@store')->middleware('auth' , 'can:allow_audience');
Route::get('/admin/events',           'EventController@index')->middleware('auth', 'can:allow_audience');
Route::get('/events/create',          'EventController@create')->middleware('auth', 'can:allow_audience');
Route::get('/event/{event}/edit',     'EventController@edit')->middleware('auth', 'can:allow_audience');
Route::post('/event',                 'EventController@store')->middleware('auth', 'can:allow_audience');
Route::put('/event/{event}',          'EventController@update')->middleware('auth', 'can:allow_audience');
Route::get('/admin/articles',         'AdminController@index')->middleware( 'can:allow_audience');
Route::get('/admin/{article}/edit',   'AdminController@edit')->middleware( 'can:allow_audience');
Route::put('/admin/{article}',        'AdminController@update')->middleware( 'can:allow_audience');
Route::delete('/admin/{article}',     'AdminController@destroy')->middleware( 'can:allow_audience');
Route::get('/admin/tags',             'TagController@index')->middleware( 'can:onlyAdmin');
Route::post('/admin/tags',            'TagController@store')->middleware( 'can:onlyAdmin');
Route::delete('/tags/{tag}',          'TagController@destroy')->middleware( 'can:onlyAdmin');
Route::put('/profile/{user}',         'ProfileController@update')->middleware( 'can:allow_audience');
Route::get('/admin/profile',          'ProfileController@index')->middleware( 'can:allow_audience');
Route::delete('/events/{event}',      'EventController@destroy')->middleware( 'can:allow_audience');
Route::get('/admin/users',            'UserController@index')->middleware( 'can:onlyAdmin');
Route::put('/users/{user}',           'UserController@upgrade')->middleware( 'can:onlyAdmin');
Route::delete('/users/{user}',        'UserController@destroy')->middleware( 'can:onlyAdmin');
Route::get('/admin/editors',          'EditorController@index')->middleware( 'can:onlyAdmin');
Route::put('/editors/{user}',           'EditorController@upgrade')->middleware( 'can:onlyAdmin');
Route::delete('/editors/{user}',       'EditorController@destroy')->middleware( 'can:onlyAdmin');








