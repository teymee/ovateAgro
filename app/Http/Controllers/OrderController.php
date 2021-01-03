<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    //PENDING ORDERS

    public function pendingIndex()
    {
        $pending = Order::where('status', 'request')->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.pending_orders', compact('pending'));
    }

    public function orderDetails($order)
    {
        $orders = Order::where('orderId', $order)->first();



        return view('admin.order_details', compact('orders'));
    }


    public function shippmentRequest($orders)
    {

        if(request('request') == "on"){

            $delivery = Order::where('orderId', $orders )->first();
            $delivery->status = 'shipping';
            foreach($delivery->Ordered_products as $product){
                $product->status = 'shipping';
                $product->save();
            }
            $delivery->save();

            return redirect('/admin/shippment');
        }

    }

    public function deliveryRequest($orders)
    {
        if(request('request') == "on"){
            $delivery = Order::where('orderId', $orders )->first();
            $delivery->status = 'delivered';
            foreach($delivery->Ordered_products as $product){
                $product->status = 'delivered';
                $product->delivered_at = $delivery->updated_at;
                $product->save();
            }
            $delivery->save();
            return redirect('/admin/delivered');
        }

    }

    //IN SHIPPMENT ORDERS
    public function shippmentIndex()
    {
        $shipping = Order::where('status', 'shipping')->orderBy('updated_at', 'desc')->paginate(10);
        return view('admin.in_shippment', compact('shipping'));
    }

    //DELIVERED ORDERS
    public function deliveredIndex()
    {
        $delivered = Order::where('status', 'delivered')->orderBy('updated_at', 'desc')->paginate(10);
        return view('admin.delivered_orders', compact('delivered'));
    }

}

