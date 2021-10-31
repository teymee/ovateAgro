@extends('layout.layout')

@section('banner')
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

                            @if($orders->count() === 0)
                                <div class="empty">
                                    <img class="empty" src="{{asset('/website/images/empty.svg')}}" alt="">
                            
                                    <h6 class="text-center">No Placed Orders</h6>
                                </div>
                            @else

                            @foreach($orders as $order)
                                <div class="order_product d-flex justify-content-between">
                                    <div class="d-flex">
                                        <img src="{{asset('/storage/'.$order->images)}}" alt="">
                                      
                                        <div  style="margin-top: 10px; margin-left: 10px">
                                            <h6>{{$order->name}}</h6>
                                            <p>Quantity : {{$order->quantity}}</p>
                                            <p>Price : &#8358; {{ number_format($order->quantity * $order->price)}}</p>
                                        </div>

                                    </div>

                                    <div>
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
                            @endforeach
                            @endif

                            <!-- {{--                            <div class="order_product d-flex justify-content-between" style="padding: 10px 30px">--}}
                            {{--                                <div class="d-flex">--}}

                            {{--                                    <div  style="margin-top: 10px">--}}
                            {{--                                        <h6>Order ID : 375711145</h6>--}}
                            {{--                                        <p>Number of Items : 3</p>--}}
                            {{--                                        <p class="badge badge-success" style="color: white; padding: 10px 20px"> Delivered</p>--}}
                            {{--                                    </div>--}}

                            {{--                                </div>--}}

                            {{--                                <div>--}}
                            {{--                                    <a href=""> SEE DETAILS</a>--}}
                            {{--                                </div>--}}

                            {{--                            </div>--}} -->



                        </div>



                    </div>
                </div>
            </div>

        </div>

    </div>



@endsection





















{{--@extends('layout.layout')--}}

{{--@section('banner')--}}
{{--    <div class=" cart-hero hero-wrap js-fullheight" id="blog-banner"--}}
{{--         style="background-image: url('website/images/cart.jpg');  "--}}
{{--         data-stellar-background-ratio="0.5">--}}
{{--        <div class="overlay"></div>--}}
{{--        <div class="container">--}}
{{--            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"--}}
{{--                 data-scrollax-parent="true">--}}
{{--                <div class=" ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">--}}
{{--                    <h1 class="mb-3 fh" data-scrollax="properties: { translateY: '30%', opacity: 1.3 }">Shop</h1>--}}
{{--                    --}}{{--                                        <p class="p" data-scrollax="properties: { translateY: '30%', opacity: 1.3 }">We grow your Agribusiness with every Agro materials,cultivars and machines available in our store.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">--}}
{{--        <path fill="#AFD557" fill-opacity="1"--}}
{{--              d="M0,192L80,197.3C160,203,320,213,480,224C640,235,800,245,960,229.3C1120,213,1280,171,1360,149.3L1440,128L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>--}}

{{--    </svg>--}}
{{--    <div class="container text-center">--}}
{{--        <h1 class="cart-title" style="margin-top: -190px; color: white;">My Account</h1>--}}
{{--    </div>--}}
{{--@endsection--}}

{{--@section('content')--}}

{{--    <div class="container d-flex" style="margin-top: 100px; margin-bottom: 500px">--}}
{{--        <div class="col-md-3 top_menu">--}}
{{--            <div class="user_menu">--}}
{{--                <ul>--}}
{{--                    <a href="">--}}
{{--                        <li><i class="far fa-user" style="margin-right: 10px"></i> Profile</li>--}}
{{--                    </a>--}}
{{--                    <a href="/myaccount">--}}
{{--                        <li><i class="fas fa-shopping-cart" style="margin-right: 10px"></i>Orders</li>--}}
{{--                    </a>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="col-md-10 bottom_menu">--}}
{{--            <div class="user_menu">--}}
{{--                <div class="header">--}}
{{--                    <h4><a href="">Order Details</a></h4>--}}
{{--                </div>--}}


{{--                <div class="container">--}}
{{--                    <div class="container">--}}

{{--                        <div class="user_order">--}}


{{--                        @foreach($orders as $order)--}}
{{--                                <div class="order_product d-flex justify-content-between">--}}
{{--                                    <div class="d-flex">--}}
{{--                                        <img--}}
{{--                                            src="https://ng.jumia.is/unsafe/fit-in/150x150/filters:fill(white)/product/50/868654/1.jpg?9944"--}}
{{--                                            alt="" height="150" width="150">--}}
{{--                                        <div  style="margin-top: 10px">--}}
{{--                                            <h6>{{$order->name}}</h6>--}}
{{--                                            <p>Quantity : {{$order->quantity}}</p>--}}
{{--                                            <p>Price : &#8358; {{ number_format($order->quantity * $order->price)}}</p>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}

{{--                                    <div>--}}
{{--                                        <p class="badge badge-warning " style="color: white; padding: 10px 20px;"> Pending</p>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            @endforeach--}}

{{--                            <div class="order_product d-flex justify-content-between" style="padding: 10px 30px">--}}
{{--                                <div class="d-flex">--}}

{{--                                    <div  style="margin-top: 10px">--}}
{{--                                        <h6>Order ID : 375711145</h6>--}}
{{--                                        <p>Number of Items : 3</p>--}}
{{--                                        <p class="badge badge-success" style="color: white; padding: 10px 20px"> Delivered</p>--}}
{{--                                    </div>--}}

{{--                                </div>--}}

{{--                                <div>--}}
{{--                                    <a href=""> SEE DETAILS</a>--}}
{{--                                </div>--}}

{{--                            </div>--}}




{{--                            <div class="order_product d-flex justify-content-between">--}}
{{--                                <div class="d-flex">--}}
{{--                                    <img--}}
{{--                                        src="https://ng.jumia.is/unsafe/fit-in/150x150/filters:fill(white)/product/50/868654/1.jpg?9944"--}}
{{--                                        alt="">--}}
{{--                                    <div  style="margin-top: 10px; line-height: 20px">--}}
{{--                                        <h6>Women's Elegant Rose Gold Watch</h6>--}}
{{--                                        <p>Order 375711145</p>--}}
{{--                                        <p>Size: One size fits all</p>--}}
{{--                                    </div>--}}

{{--                                </div>--}}

{{--                                <div>--}}
{{--                                    <a href=""> SEE DETAILS</a>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}


{{--                        <div class="profile ">--}}
{{--                            <div class="container">--}}
{{--                                <form action="" method="">--}}
{{--                                    @csrf--}}
{{--                                    @method('PUT')--}}

{{--                                    <div class=" form-group ">--}}
{{--                                        <label for="">Name:</label>--}}
{{--                                        <input type="text" class="form-control" id="fullname" name="name"--}}
{{--                                               value="{{auth()->user()->name }}"--}}
{{--                                               style="@error('fullname') border-color:red; @enderror"--}}
{{--                                               required--}}
{{--                                        />--}}

{{--                                    </div>--}}

{{--                                    <br>--}}

{{--                                    <div class=" form-group ">--}}
{{--                                        <label for="">Email:</label>--}}
{{--                                        <input type="email" class="form-control" id="email" name="email"--}}
{{--                                               placeholder="Email Address"--}}
{{--                                               value="{{auth()->user()->email }}"--}}
{{--                                               style="@error('email') border-color:red; @enderror"--}}
{{--                                               required--}}
{{--                                        />--}}

{{--                                    </div>--}}
{{--                                    <br>--}}

{{--                                    <div class=" form-group ">--}}
{{--                                        <label for="">Phone number:</label>--}}
{{--                                        <input type="tel" class="form-control" id="phone_number" name="phone"--}}
{{--                                               placeholder="Phone Number (optional)"--}}
{{--                                               value="{{ auth()->user()->phone }}"--}}
{{--                                               style="@error('phone') border-color:red; @enderror"--}}
{{--                                               required--}}
{{--                                        />--}}
{{--                                    </div>--}}
{{--                                    <br>--}}

{{--                                    <div class=" form-group ">--}}
{{--                                        <label for="">Password:</label>--}}
{{--                                        <input type="password" class="form-control" id="password" name="password"--}}
{{--                                               placeholder="Password"--}}
{{--                                               style="@error('fullname') border-color:red; @enderror"--}}

{{--                                        />--}}
{{--                                        <p style="color:red; font-size: 13px; padding-top: 10px" class="text-center">--}}
{{--                                            <strong>Leave password blank to keep current password</strong></p>--}}

{{--                                    </div>--}}
{{--                                    <br>--}}

{{--                                    <div class=" form-group ">--}}
{{--                                        <label for="">Confirm Pasword:</label>--}}
{{--                                        <input type="password" class="form-control" id="confirm"--}}
{{--                                               name="password_confirmation"--}}
{{--                                               placeholder="Confirm Password"--}}
{{--                                               style="@error('fullname') border-color:red; @enderror"--}}
{{--                                        />--}}

{{--                                    </div>--}}
{{--                                    <br>--}}
{{--                                    <div class="col-12 justify-content-center">--}}
{{--                                        <button class="grey_button col-12 "--}}
{{--                                                style="  border-radius: 20px;  padding: 9px 35px;">--}}
{{--                                            Update Profile--}}
{{--                                        </button>--}}
{{--                                    </div>--}}

{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}

{{--    </div>--}}

{{--@endsection--}}

