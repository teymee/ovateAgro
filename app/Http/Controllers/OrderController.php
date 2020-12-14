<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    //PENDING ORDERS

    public function pendingIndex()
    {
        $pending = Order::where('delivered', false)->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.pending_orders', compact('pending'));
    }

    public function pendingShow($order)
    {
        $orders = Order::where('orderId', $order)->first();
        $items = serialize($orders->orders);
        $data = unserialize($items);
//           dd($contents);
        $contents = json_decode($data);


        return view('admin.order_details', compact('orders', 'contents'));
    }

    public function deliveryRequest($orders)
    {
        if(request('request') == false){
            $delivery = Order::where('orderId', $orders )->first();
            $delivery->delivered = true;
            $delivery->save();
            return redirect('/admin/delivered');
        }

    }


    //DELIVERED ORDERS
    public function deliveredIndex()
    {
        $delivered = Order::where('delivered', true)->orderBy('updated_at', 'desc')->paginate(10);
        return view('admin.delivered_orders', compact('delivered'));
    }

}

