<?php

namespace App\Http\Controllers;
use Gate;
use App\Shipping;
use Illuminate\Http\Request;

class ShippingController extends Controller
{



    public function index()
    {
        $fees = Shipping::orderBy('state', 'asc')->paginate(10);
        return view('admin.shipping', compact('fees'));
    }

    public function store()
    {
        $validation =  request()->validate([
            'state' => 'required',
            'fee' =>    'required'
        ]);

        Shipping::create($validation);
        return back();
    }

    public function destroy(Shipping $shipping)
    {
        $shipping->delete();
        return back();
    }

}
