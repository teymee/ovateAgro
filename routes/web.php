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
Route::get('/',                       'WebsiteController@home');
Route::get('/shop',                   'WebsiteController@shop');
Route::post('/search',                  'WebsiteController@search');
Route::get('/events',                 'WebsiteController@events');
Route::get('/contact',                'WebsiteController@contact');
Route::get('/detail/{products}',      'WebsiteController@detail');
Route::get('/blog',                   'ArticleController@index');
Route::get('/article/{article}',      'ArticleController@show');
Route::get('/event/{event}',          'EventController@show');
Route::post("/comment",               'CommentController@store');


Auth::routes();

Route::get('/home',                   'HomeController@index')->name('home')->middleware('auth', 'can:allow_audience');;


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

//EDITORS AND ADMIN

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
Route::put('/profile/{user}',         'ProfileController@update')->middleware( 'can:allow_audience');
Route::get('/admin/profile',          'ProfileController@index')->middleware( 'can:allow_audience');
Route::delete('/events/{event}',      'EventController@destroy')->middleware( 'can:allow_audience');


//ADMIN
Route::get('/admin/tags',             'TagController@index')->middleware( 'can:onlyAdmin');
Route::post('/admin/tags',            'TagController@store')->middleware( 'can:onlyAdmin');
Route::delete('/tags/{tag}',          'TagController@destroy')->middleware( 'can:onlyAdmin');
Route::get('/admin/users',            'UserController@index')->middleware( 'can:onlyAdmin');
Route::put('/users/{user}',           'UserController@upgrade')->middleware( 'can:onlyAdmin');
Route::delete('/users/{user}',        'UserController@destroy')->middleware( 'can:onlyAdmin');
Route::get('/admin/editors',          'EditorController@index')->middleware( 'can:onlyAdmin');
Route::put('/editors/{user}',         'EditorController@upgrade')->middleware( 'can:onlyAdmin');
Route::delete('/editors/{user}',      'EditorController@destroy')->middleware( 'can:onlyAdmin');


//ADMIN PRODUCT CONTROLLER
Route::get('/products/add_product',  'ProductController@index')->middleware( 'auth', 'can:onlyAdmin');
Route::post('/product',              'ProductController@store')->middleware( 'auth', 'can:onlyAdmin');
Route::get('/products' ,             'ProductController@show' )->middleware('auth', 'can:onlyAdmin');
Route::get('/products/{product}/edit' ,     'ProductController@edit' )->middleware('auth', 'can:onlyAdmin');
Route::put('/products/{product}' ,   'ProductController@update')->middleware('auth', 'can:onlyAdmin');
Route::delete('/product/{product}',  'ProductController@destroy')->middleware('auth', 'can:onlyAdmin');


//CART
Route::get('/cart',                   'CartController@index');
Route::post('/cart/{id}',             'CartController@store');
Route::delete('/cart/{id}',           'CartController@destroy');
Route::put('/cart/{id}',              'CartController@update');
Route::get('/clear-cart',             'CartController@clear');

//ADMIN SHIPPING FEE CONTROLLER
Route::get('/admin/shipping',         'ShippingController@index')->middleware('auth', 'can:onlyAdmin');
Route::post('/shipping',              'ShippingController@store')->middleware('auth', 'can:onlyAdmin');
Route::delete('/shippingfee/{shipping}',     'ShippingController@destroy')->middleware('auth', 'can:onlyAdmin');

//CHECKOUT
Route::get('/checkout' ,              'CheckoutController@index')->middleware('auth');
Route::get('/thank-You/{orderId}',    'ConfirmationController@index')->middleware('auth');

//PAYMENT CONTROLLER
Route::post('/pay',                   'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback',       'PaymentController@handleGatewayCallback');

//ADMIN ORDERS
Route::get('/admin/pending',           'OrderController@pendingIndex')->middleware('auth', 'can:onlyAdmin');
Route::get('/order_details/{order}',         'OrderController@orderDetails')->middleware('auth', 'can:onlyAdmin');
Route::post('/request/{orders}',       'OrderController@deliveryRequest')->middleware('auth', 'can:onlyAdmin');
Route::get('/admin/delivered',         'OrderController@deliveredIndex')->middleware('auth', 'can:onlyAdmin');
Route::get('/admin/shippment',                'OrderController@shippmentIndex');
Route::post('/shippment/{orders}',                'OrderController@shippmentRequest');

//USER DASHBOARD
Route::get('/myaccount' ,               'UserOrdersController@index')->middleware('auth');
Route::get('/order/details/{id}' ,   'UserOrdersController@show')->middleware('auth');
Route::get('/profile' ,   'UserProfileController@index')->middleware('auth');
Route::put('/profile' ,   'UserProfileController@update')->middleware('auth');

Auth::routes();

Route::get('/home',                   'HomeController@index')->name('home');
