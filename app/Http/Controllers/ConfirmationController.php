<?php

namespace App\Http\Controllers;

use App\Order;
use App\Shipping;
use App\Tag;
use Illuminate\Http\Request;

class ConfirmationController extends Controller
{
    public function index($orderId)
    {

        $contents = Order::where('orderId', $orderId)->first();


//        $state = Shipping::where('state', $orders->state)->first();
//        $shippingFee = $state->fee;


        $tags = Tag::all();





        return view('confirmation_page', compact('contents', 'tags'));

    }
}
