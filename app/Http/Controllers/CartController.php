<?php

namespace App\Http\Controllers;

use App\Product;
use App\Shipping;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CartController extends Controller
{
    public function index(){
        if( Str::contains((str_replace(url('/'), '', url()->previous())), '/thank-You/')){
            \Cart::clear();
        }
        $cartItems = \Cart::getContent();
        $tags = Tag::all();
        $shipping = Shipping::orderBy('state', 'asc')->get();

        return view('cart', compact('tags', 'cartItems','shipping'));
    }

    public function store($id){

        $product = Product::where('id', $id)->first();
        $new_name = $product->name;


        $items = \Cart::getContent();
        foreach ($items as $row) {
            if ($row->name == $new_name) {
                return back()->with('session_message', $new_name . ' already exist in your Cart');
            }
        }
        $rowId = uniqid();


        $cart = \Cart::add(array(
            'id' => $rowId,
            'name' => $product->name,
            'price' => $product->price,
            'image' => $product->images,
            'quantity' => \request('quantity'),
            'totalQuantity' => $product->quantity,
            'attributes' => array(),
            'associatedModel' => $product
        ));

//        \Cart::clear();

        return redirect('/cart');
    }

    public function update($id){
        \Cart::update($id, array(
            'quantity' => array(
                'relative' => false,
                'value' => request('quantity')
            ),
        ));


        return back()->with('session_message', 'Cart updated');
    }


    public function destroy($id){
        \Cart::remove($id);
        return back()->with('session_message', 'Item has been removed from Cart');
    }

    public function clear(){
        \Cart::clear();
        return back()->with('session_message', 'Cart Cleared');
    }
}
