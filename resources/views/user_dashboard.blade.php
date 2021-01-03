@extends('layout.layout')

@section('banner')
    <div class=" cart-hero hero-wrap js-fullheight" id="blog-banner"
         style="background-image: url('website/images/cart.jpg');  "
         data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                 data-scrollax-parent="true">
                <div class=" ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-3 fh" data-scrollax="properties: { translateY: '30%', opacity: 1.3 }">Orders</h1>
                    {{--                                        <p class="p" data-scrollax="properties: { translateY: '30%', opacity: 1.3 }">We grow your Agribusiness with every Agro materials,cultivars and machines available in our store.</p>--}}
                </div>
            </div>
        </div>
    </div>
    <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#AFD557" fill-opacity="1"
              d="M0,192L80,197.3C160,203,320,213,480,224C640,235,800,245,960,229.3C1120,213,1280,171,1360,149.3L1440,128L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>

    </svg>
    <div class="container text-center">
        <h1 class="cart-title" style="margin-top: -190px; color: white;">My Account</h1>
    </div>
@endsection

@section('content')

    <div class="container d-flex total_page" style="margin-top: 100px; margin-bottom: 200px">
        <div class="col-md-3 top_menu">
            <div class="user_menu">
                <ul>
                    <a href="/profile">
                        <li><i class="far fa-user" style="margin-right: 10px"></i> Profile</li>
                    </a>
                    <a href="/myaccount">
                        <li><i class="fas fa-shopping-cart" style="margin-right: 10px"></i>Orders</li>
                    </a>
                </ul>
            </div>
        </div>

        <div class="col-md-10 bottom_menu">
            <div class="user_menu">
                <div class="header">
                    <h4><a href="">Order</a></h4>
                </div>


                <div class="container">
                    <div class="container">

                        <div class="user_order">

                            @foreach($orders as $order)
                                <div class="order_product d-flex justify-content-between" style="padding: 10px 30px">
                                    <div class="d-flex">

                                        <div style="margin-top: 10px;">
                                            <h6> {{$order->created_at->format('d, M Y')}} </h6>
                                            <h6 style="padding-bottom: 10px">Order ID : {{$order->orderId}}</h6>
                                            <p><strong>Number of Items </strong>: {{$order->Ordered_products->count()}}
                                            </p>
                                            <p><strong>Shipping Cost</strong> :
                                                &#8358; {{ number_format($order->shipping_cost)}}</p>
                                            <p><strong>Shipping Address</strong></p>
                                            <p style="padding-top: -5px"><span>{{$order->address}},<br> {{$order->city}},{{$order->state}}.</span>
                                            </p>
                                            <br>
                                            @if($order->status == 'request')
                                                <p class="badge  badge-warning "
                                                   style="color: white; padding: 10px 20px;"> Processing </p>
                                                @elseif($order->status == 'shipping')
                                                    <p class="badge  badge-info "
                                                       style="color: white; padding: 10px 20px;"> Shipping </p>
                                            @elseif($order->status == 'delivered')
                                                <p class="badge  badge-success "
                                                   style="color: white; padding: 10px 20px;"> Delivered </p>
                                            @endif
                                        </div>

                                    </div>

                                    <div style="margin-top: 10px;">
                                        <a href="/order/details/{{$order->id}}"> SEE DETAILS</a> <br>

                                    </div>


                                </div>
                            @endforeach


                        </div>


                    </div>

                </div>
            </div>

        </div>

    </div>
    <div class=" pag d-flex justify-content-center">
        {{$orders->links()}}
    </div>



@endsection


