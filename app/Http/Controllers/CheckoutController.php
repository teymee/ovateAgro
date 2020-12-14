<?php

namespace App\Http\Controllers;

use App\Shipping;
use App\Tag;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        if(auth()->user() && request()->is('guestCheckout')){
            return redirect('/checkout');
        }
        $tags = Tag::all();
        $cartContents = \Cart::getContent();
        $shipping = Shipping::orderBy('state', 'asc')->get();
        return view('checkout', compact('cartContents', 'shipping', 'tags'));

    }
}
