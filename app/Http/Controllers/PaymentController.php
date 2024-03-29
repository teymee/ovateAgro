<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Order;
use App\OrderedProduct;
use App\Shipping;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Http;
use Paystack;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */



    public function redirectToGateway()
    {




        $this->validateRequest();
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {



        $paymentDetails = Paystack::getPaymentData();



        if (array_key_exists('data', $paymentDetails) &&
            array_key_exists('status', $paymentDetails['data']) && ($paymentDetails['data']['status'] === 'success')) {

            $response = Http::withToken(env('PAYSTACK_SECRET_KEY'))->get('https://api.paystack.co/transaction/verify/'.$paymentDetails['data']['reference']);
            $security = $response->json();



            if( $security['data']['status'] == $paymentDetails['data']['status']&&
                $security['data']['amount']== $paymentDetails['data']['amount']){


                $orderId = $paymentDetails['data']['id'];

                $metadata = $paymentDetails['data']['metadata'][0];

                $result = json_decode($metadata, true);
                $shipping_cost = $result['state'];
                $shippingFee = $result['state'];
                $state = Shipping::where('fee', $result['state'])->first();
//                $contents = \Cart::getcontent();
//                 $contents = serialize(\Cart::getcontent());

                $order = Order::create([
                    'orderId' => $orderId,
                    'userId' => $result['userId'],
                    'fullname' => $result['fullname'],
                    'phone' => $result['phone'],
                    'email' => $result['email'],
                    'state' => $state->state,
                    'shipping_cost' => $shipping_cost,
                    'city' => $result['city'],
                    'address' => $result['address'],
                    'extra' => $result['extra'],
                ]);

                $contents = \Cart::getcontent();

                foreach ($contents as $content){
                    $newOrderProduct = new OrderedProduct();
                    $newOrderProduct->order_id = $order->id;
                    $newOrderProduct->name = $content->name;
//                    $newOrderProduct->image = $content->image;
                    $newOrderProduct->quantity = $content->quantity;
                    $newOrderProduct->price = $content->price;
                    $newOrderProduct->status = 'Pending';
                    $newOrderProduct->save();
                }

                //   \Cart::getcontent();

                return redirect('/thank-You/'.$orderId);

            }else{
                return back()->with('session message', 'Transaction Error');
            }










        }





        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }

    public function messages(){
        return[
            'email.unique' => 'You already have an account with this email',
        ];
    }

    protected function validateRequest(){

        $emailVerification = (auth()->user()) ? 'required|email' : 'required|email|unique:users';

        return request()->validate([
            'fullname'   => 'required',
            'phone'      => 'required',
            'email'      => $emailVerification,
            'state'      => 'required|exists:shippings,fee',
            'city'       => 'required',
            'address'    => 'required',
            'extra'      => 'nullable'
        ]);


    }


}













//
//namespace App\Http\Controllers;
//
//use App\Http\Controllers\Controller;
//use App\Order;
//use App\OrderedProduct;
//use App\Shipping;
//use Illuminate\Http\Request;
//
//use App\Http\Requests;
//use Illuminate\Support\Facades\Http;
//use Paystack;
//
//class PaymentController extends Controller
//{
//
//    /**
//     * Redirect the User to Paystack Payment Page
//     * @return Url
//     */
//
//
//    public function redirectToGateway()
//    {
//
//
//        $this->validateRequest();
//
//        return Paystack::getAuthorizationUrl()->redirectNow();
//    }
//
//    /**
//     * Obtain Paystack payment information
//     * @return void
//     */
//    public function handleGatewayCallback()
//    {
//
//
//        $paymentDetails = Paystack::getPaymentData();
//
//
//        if (array_key_exists('data', $paymentDetails) &&
//            array_key_exists('status', $paymentDetails['data']) && ($paymentDetails['data']['status'] === 'success')) {
//
//            $response = Http::withToken(env('PAYSTACK_SECRET_KEY'))->get('https://api.paystack.co/transaction/verify/' . $paymentDetails['data']['reference']);
//            $security = $response->json();
//
//
//            if ($security['data']['status'] == $paymentDetails['data']['status'] &&
//                $security['data']['amount'] == $paymentDetails['data']['amount']) {
//
//
//                $orderId = $paymentDetails['data']['id'];
//
//                $metadata = $paymentDetails['data']['metadata'][0];
//
//                $result = json_decode($metadata, true);
//                $shipping_cost = $result['state'];
//                $shippingFee = $result['state'];
//                $state = Shipping::where('fee', $result['state'])->first();
////                $contents = \Cart::getcontent();
////                 $contents = serialize(\Cart::getcontent());
//
//                $order = Order::create([
//                    'orderId' => $orderId,
//                    'userId' => $result['userId'],
//                    'fullname' => $result['fullname'],
//                    'phone' => $result['phone'],
//                    'email' => $result['email'],
//                    'state' => $state->state,
//                    'shipping_cost' => $shipping_cost,
//                    'city' => $result['city'],
//                    'address' => $result['address'],
//                    'extra' => $result['extra'],
//                ]);
//
//                $contents = \Cart::getcontent();
//                foreach ($contents as $content) {
//                    $newOrderProduct = new OrderedProduct();
//                    $newOrderProduct->order_id = $order->id;
//                    $newOrderProduct->name = $content->name;
//                    $newOrderProduct->quantity = $content->quantity;
//                    $newOrderProduct->price = $content->price;
//                    $newOrderProduct->status = 'Pending';
//                    $newOrderProduct->save();
//                }
//
//                //   \Cart::getcontent();
//
//                return redirect('/thank-You/' . $orderId);
//
//            } else {
//                return back()->with('session message', 'Transaction Error');
//            }
//        }
//
//
//        // Now you have the payment details,
//        // you can store the authorization_code in your db to allow for recurrent subscriptions
//        // you can then redirect or do whatever you want
//    }
//
//    public function messages()
//    {
//        return [
//            'email.unique' => 'You already have an account with this email',
//        ];
//    }
//
//    protected function validateRequest()
//    {
//
//        $emailVerification = (auth()->user()) ? 'required|email' : 'required|email|unique:users';
//
//        return request()->validate([
//            'userId' => 'required',
//            'fullname' => 'required',
//            'phone' => 'required',
//            'email' => $emailVerification,
//            'state' => 'required|exists:shippings,fee',
//            'city' => 'required',
//            'address' => 'required',
//            'extra' => 'nullable'
//        ]);
//
//
//    }
//
//
//}
