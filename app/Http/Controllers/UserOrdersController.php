<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderedProduct;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if( Str::contains((str_replace(url('/'), '', url()->previous())), '/thank-You/')){
            \Cart::clear();
        }

        $user_id = auth()->user()->id;
        $orders = Order::where('userId', $user_id)->orderBy('created_at', 'desc')->paginate(8);
        $tags = Tag::all();
        return view('user_dashboard', compact('tags', 'orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $orders = OrderedProduct::where('order_id', $id)->get();
        $tags = Tag::all();
        return view('user_order_details', compact('tags', 'orders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
