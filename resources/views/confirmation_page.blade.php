@extends('layout.layout')

@section('banner')
    <div  class=" cart-hero hero-wrap js-fullheight" id="blog-banner" style="background-image: url('/website/images/cart.jpg');  "
          data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                 data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-3 fh" data-scrollax="properties: { translateY: '30%', opacity: 1.3 }">Order</h1>
                    {{--                                        <p class="p" data-scrollax="properties: { translateY: '30%', opacity: 1.3 }">We grow your Agribusiness with every Agro materials,cultivars and machines available in our store.</p>--}}
                </div>
            </div>
        </div>
    </div>
    <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#AFD557" fill-opacity="1" d="M0,192L80,197.3C160,203,320,213,480,224C640,235,800,245,960,229.3C1120,213,1280,171,1360,149.3L1440,128L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>

    </svg>
    <div class="container text-center">
        <h1 class="cart-title" style="margin-top: -190px; color: white;">Order Details</h1>
    </div>
@endsection

@section('content')

    <!--================ confirmation part start =================-->
    <section style="margin-bottom: 200px" class="confirmation_part padding_top">

        <div class="container">

            <div class="row" style="margin-bottom: 50px">



                <div class="col-lg-12" style="color: black;">


                    <div class="col-12 text-center "style="color: black; margin-top: 90px">
                        <span >Thank you. Your order has been received.</span><br><br>
                    </div>
                    <div class="order_details_iner">

                        <h3>Order Details</h3>
                        <table class="table table-borderless">
                            <thead>
                            <tr >
                                <th scope="col" colspan="2">Product</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contents as $content)
                                <tr style="border-top:20px;">
                                    <th  colspan="2"><span>{{$content->name}}</span></th>
                                    <th>x{{$content->quantity}}</th>
                                    <th > <span>&#8358;{{number_format($content->price)}}</span></th>
                                </tr>
                            @endforeach
                            {{--@foreach($contents as $contentss)--}}
                            {{--                            @foreach ($contentss as $content)--}}
                            {{--                            <tr>--}}
                            {{--                                <th colspan="2"><span>{{$content->name}}</span></th>--}}
                            {{--                                <th>x{{$content->quantity}}</th>--}}
                            {{--                                <th> <span>&#8358;{{number_format($content->price * 1000)}}</span></th>--}}
                            {{--                            </tr>--}}
                            {{--                            @endforeach--}}
                            {{--@endforeach--}}

                            <tr>
                                <th colspan="3">Subtotal</th>
                                <th> <span>&#8358;{{number_format(\Cart::getsubTotal())}}</span></th>
                            </tr>
                            <tr>
                                <th colspan="3">shipping</th>
                                <th><span>flat rate: &#8358;{{number_format($shippingFee)}}</span></th>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th scope="col" colspan="3">Total</th>
                                <th scope="col">Total : &#8358;{{number_format(\Cart::getTotal()  + $shippingFee)}}</th>
                            </tr>
                            </tfoot>


                        </table>
                    </div>
                </div>
            </div>

            <div class="row">


                <div class="col-lg-6 col-lx-4">
                    <div class="single_confirmation_details">
                        <h4>order info</h4>
                        <ul>

                            <li>
                                <p>order number</p><span>: {{$orders->orderId}}</span>
                            </li>



                            <li>
                                <p>Date</p><span>: {{$orders->created_at->format('M d, Y')}}</span>
                            </li>

                            <li>
                                <p>Time</p><span>: {{$orders->created_at->format('h:i A')}}</span>
                            </li>
                            <li>
                                <p>total</p><span> : &#8358;{{number_format(\Cart::getTotal()+ $shippingFee)}}</span>
                            </li>
                            <li>
                                <p>Payment methord</p><span>: Check payments</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-lx-4">
                    <div class="single_confirmation_details">
                        <h4>Billing Details</h4>
                        <ul>
                            <li>
                                <p>Name</p><span>: {{$orders->fullname}}</span>
                            </li>

                            <li>
                                <p>Phone Number</p><span>: {{$orders->phone}}</span>
                            </li>

                            <li>
                                <p>country</p><span>: Nigeria</span>
                            </li>

                            <li>
                                <p>city</p><span>: {{$orders->city}}</span>
                            </li>
                            <li>
                                <p>Address</p><span>: {{$orders->address}}</span>
                            </li>

                        </ul>
                    </div>
                </div>
                {{--                <div class="col-lg-6 col-lx-4">--}}
                {{--                    <div class="single_confirmation_details">--}}
                {{--                        <h4>shipping Address</h4>--}}
                {{--                        <ul>--}}
                {{--                            <li>--}}
                {{--                                <p>Street</p><span>: 56/8</span>--}}
                {{--                            </li>--}}
                {{--                            <li>--}}
                {{--                                <p>city</p><span>: Los Angeles</span>--}}
                {{--                            </li>--}}
                {{--                            <li>--}}
                {{--                                <p>country</p><span>: United States</span>--}}
                {{--                            </li>--}}
                {{--                            <li>--}}
                {{--                                <p>postcode</p><span>: 36952</span>--}}
                {{--                            </li>--}}
                {{--                        </ul>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>

        </div>
    </section>
    <!--================ confirmation part end =================-->

@endsection
