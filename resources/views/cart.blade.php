@extends('layout.layout')

@section('banner')
    <div class=" cart-hero hero-wrap js-fullheight" id="blog-banner"
         style="background-image: url('website/images/cart.jpg');  "
         data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                 data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-3 fh" data-scrollax="properties: { translateY: '30%', opacity: 1.3 }">Cart</h1>
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
        <h1 class="cart-title" style="margin-top: -190px; color: white;">Cart</h1>
    </div>

@endsection

@section('content')

    <div class="container">
        @if(session('session_message'))

            <div class="uk-alert-success" uk-alert style="margin-top: 60px">
                <a class="uk-alert-close" uk-close></a>
                <p><span><i class="fas fa-check"></i></span>{{session()->get('session_message')}}</p>
            </div>
        @endif
    </div>
    <section class="cart_area padding_top" style="margin-bottom:100px;">
        <div class="container">


            <div class="cart_inner" style="margin-top:100px;">

                @if(!\Cart::isEmpty())

                    @if(session()->has('session message'))
                        <div class="alert alert-success col-12">
                            {{session()->get('session message')}}
                        </div>

                    @endif
                    <br>
                    {{--                        <h1 class="cart-title" style="margin-top: 100px; color: black;">Cart</h1>--}}
                    <h5 class="text-left" style="color: #AFD557"><strong>{{\Cart::getContent()->count()}} Item(s) in
                            Shopping Cart</strong>
                    </h5>
                    <div class="cart_mobile">
                        <table style="width:100%">
                            @foreach($cartItems as $cartItem)
                                <tr>

                                    <td colspan="2" align="center">
                                        <form action="/cart/{{$cartItem->id}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button
                                                style="color: red; border: none; background-color: transparent; font-size: 20px">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </form>
                                        {{dd($cartItem->image)}}
                                        <img src="{{asset('storage/'.$cartItem->image)}}" width="150" height="100px"
                                             style="border-radius: 10px"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Product</td>
                                    <td>{{$cartItem->name}}</td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td>&#8358;{{number_format($cartItem->price )}}</td>

                                </tr>
                                <form class="media-body" action="/cart/{{$cartItem->id}}" method="post">
                                    @csrf

                                    <tr>
                                        <td>Quantity</td>
                                        <td><input type="number" min="1" value="{{$cartItem->quantity}}"
                                                   name="quantity">
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td> &#8358;{{ number_format(\Cart::get($cartItem->id)->getPriceSum())}}</td>

                                    </tr>

                                    <tr>
                                        <td colspan="2" align="center">

                                            @method('put')
                                            @csrf
                                            <input type="hidden" value="{{$cartItem->id}}">
                                            <button role="submit" class="grey_button1"
                                                    style=" margin-left:30px; border-radius: 20px;  padding: 9px 35px;">
                                                Update Item
                                            </button>
                                        </td>


                                    </tr>
                                </form>
                                <tr>
                                    <td colspan="2" align="center">

                                    </td>
                                </tr>
                            @endforeach
                            <tr style="color: black">
                                <td><strong>Subtotal</strong></td>
                                <td><i><strong>&#8358;{{number_format(\Cart::getsubTotal() )}}</strong></i></td>
                            </tr>
                        </table>


                        <div class="d-flex justify-content-between" style="margin-top: 20px">
                            <button class="grey_button"
                                    style="font-size: 12px; border-radius: 20px;  padding: 9px 10px;"><a href="/shop    ">
                                    Continue Shopping</a></button>
                            <button class="grey_button"
                                    style="font-size: 12px; border-radius: 20px;  padding: 9px 10px;"> <a href="/checkout">
                                    Proceed to Checkout</a></button>
                        </div>

                    </div>


                    {{--                    LAPTOP VIEW--}}

                    <div class="table-responsive cart_laptop">
                        <table class="table ">
                            <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                                <th scope="col" align="center">Update</th>
                                <th scope="col" align="center">Remove</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cartItems as $cartItem)
                                <tr>
                                    <form class="media-body" action="/cart/{{$cartItem->id}}" method="post">
                                        <td>
                                            <div class="media">
                                                <div class="d-flex">
                                                 {{dd($cartItem->image)}}
                                                    {{--REGULAR HOSTING--}}

                                                    <img src="{{asset('storage/'.$cartItem->image)}}" width="150"
                                                         height="100px" style="border-radius: 10px"/>
                                                    {{--CLOUDINARY--}}

                                                    {{--  <img src="{{asset('storage/'.$cartItem->image)}}" alt="" width="120"--}}
                                                    {{--  height="90px">--}}

                                                </div>
                                                <div class="media-body">
                                                    <p>{{$cartItem->name}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h5>&#8358;{{number_format($cartItem->price )}}</h5>
                                        </td>
                                        <td>
                                            <input type="number" min="1" value="{{$cartItem->quantity}}"
                                                   name="quantity">

                                        </td>
                                        <td>
                                            <h5>&#8358;{{ number_format(\Cart::get($cartItem->id)->getPriceSum())}}</h5>

                                        </td>
                                        <td>

                                            @method('put')
                                            @csrf
                                            <input type="hidden" value="{{$cartItem->id}}">
                                            <button role="submit" class="grey_button1"
                                                    style=" margin-left:30px; border-radius: 20px;  padding: 9px 35px;">
                                                <i
                                                    class="fas fa-check"></i></button>
                                        </td>
                                    </form>
                                    <td>
                                        <form action="/cart/{{$cartItem->id}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="grey_button1"
                                                    style=" margin-left:30px; border-radius: 20px;  padding: 9px 35px;">
                                                X
                                            </button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach

                            <tr class="bottom_button">
                                <td>
                                    <a href="/shop">
                                        <button class="grey_button"
                                                style="  border-radius: 20px;  padding: 9px 35px;">
                                            Continue Shopping
                                        </button>
                                    </a>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="cupon_text float-right">
                                        <a href="/checkout">
                                            <button class="grey_button"
                                                    style=" border-radius: 20px;  padding: 9px 35px;">
                                                Proceed to Checkout
                                            </button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <h5><i><strong>Subtotal</strong></i></h5>
                                </td>
                                <td>

                                    <h5><i><strong>&#8358;{{number_format(\Cart::getsubTotal() )}}</strong></i>
                                    </h5>
                                </td>
                            </tr>

                            </tbody>
                        </table>

                    </div>
                @else
                    <div class="text-center" style="margin: 200px 50px">
                        <h3>Cart is currently Empty </h3>
                        <a class="btn_1" href="/shop">Continue Shopping</a>
                    </div>

                @endif

            </div>
        </div>
    </section>









    {{--    @if(!\Cart::isEmpty())--}}
    {{--        <div class="container cart-page" style="margin-top: 100px; margin-bottom: 200px">--}}


    {{--            <h2>Cart</h2>--}}
    {{--            <div class="table-responsive">--}}
    {{--                <table class="table table-hover">--}}
    {{--                    <thead>--}}
    {{--                    <tr align="center">--}}
    {{--                        <th colspan="2"></th>--}}
    {{--                        <th>Product</th>--}}
    {{--                        <th>Price</th>--}}
    {{--                        <th>Quantity</th>--}}
    {{--                        <th>Subtotal</th>--}}
    {{--                        <th>Update</th>--}}
    {{--                        <th>Remove</th>--}}
    {{--                    </tr>--}}
    {{--                    </thead>--}}
    {{--                    <tbody>--}}
    {{--                    @foreach($cartItems as $item)--}}

    {{--                            <tr align="center">--}}
    {{--                                <form action="/cart/{{$item->id}}" method="post">--}}
    {{--                                <td colspan="2" align="center"><img src="{{asset('storage/'.$item->image)}}" alt=""--}}
    {{--                                                                    width="70"></td>--}}
    {{--                                <td>{{$item->name}}</td>--}}
    {{--                                <td>&#8358;{{number_format($item->price)}}</td>--}}
    {{--                                <td><input type="number" min="1" value="{{$item->quantity}}" name="quantity"></td>--}}
    {{--                                <td>&#8358;{{ number_format(\Cart::get($item->id)->getPriceSum())}}</td>--}}

    {{--                                <td>--}}

    {{--                                    @method('put')--}}
    {{--                                    @csrf--}}
    {{--                                    <input type="hidden" value="{{$item->id}}">--}}
    {{--                                    <button role="submit" class="grey_button"--}}
    {{--                                            style=" margin-left:30px; border-radius: 20px;  padding: 9px 35px;"><i--}}
    {{--                                            class="fas fa-check"></i></button>--}}
    {{--                                </td>--}}
    {{--                              </form>--}}
    {{--                                 <td>--}}
    {{--                                      <form action="/cart/{{$item->id}}" method="post">--}}
    {{--                                              @method('delete')--}}
    {{--                                              @csrf--}}
    {{--                                         <button class="grey_button"--}}
    {{--                                             style=" margin-left:30px; border-radius: 20px;  padding: 9px 35px;">X--}}
    {{--                                         </button>--}}
    {{--                                      </form>--}}
    {{--                                 </td>--}}
    {{--                        </tr>--}}



    {{--                    @endforeach--}}


    {{--                    --}}{{--                <tr>--}}
    {{--                    --}}{{--                    <td colspan="2" align="center" ><img src="{{asset('website/images/fertilizer.jpg')}}" alt="" width="70"  ></td>--}}
    {{--                    --}}{{--                    <td>Spray</td>--}}
    {{--                    --}}{{--                    <td>£1.20</td>--}}
    {{--                    --}}{{--                    <td>2</td>--}}
    {{--                    --}}{{--                    <td>£1.20</td>--}}
    {{--                    --}}{{--                    <td> <button class="grey_button" style=" margin-left:30px; border-radius: 20px;  padding: 9px 35px;">X</button></td>--}}
    {{--                    --}}{{--                </tr>--}}

    {{--                    </tbody>--}}
    {{--                </table>--}}

    {{--            </div>--}}
    {{--            <div class=" d-flex justify-content-between">--}}
    {{--                <button class="grey_button last" style=" margin-left:30px; border-radius: 20px;  padding: 9px 35px;"><a--}}
    {{--                        href="/shop">Return to shop</a></button>--}}
    {{--                <button class="grey_button last" style=" margin-left:30px; border-radius: 20px;  padding: 9px 35px;"><a--}}
    {{--                        href="/clear-cart">Clear Cart</a></button>--}}
    {{--            </div>--}}


    {{--            <div class="cart-total">--}}
    {{--                <h2>Cart Total</h2>--}}
    {{--                <div class="cart-total-table">--}}
    {{--                    <div class="row justify-content-around">--}}
    {{--                        <div class="col-3 left">--}}
    {{--                            Subtotal--}}
    {{--                        </div>--}}
    {{--                        <div class="col-3 right">--}}
    {{--                            &#8358;{{number_format(\Cart::getSubtotal())}}--}}
    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                    --}}{{--                    <div class="row justify-content-around">--}}
    {{--                    --}}{{--                        <div class="col-3 left">--}}
    {{--                    --}}{{--                            Shopping--}}
    {{--                    --}}{{--                        </div>--}}
    {{--                    --}}{{--                        <div class="col-4 right">--}}
    {{--                    --}}{{--                            <p>  Flat rate: $1.22</p>--}}
    {{--                    --}}{{--                            <p>Shipping to <strong>Nigeria</strong> <br>--}}
    {{--                    --}}{{--                          <a id="address" ontoggle="handleClick()" style="color: #ffbf96; text-decoration: underline">--}}
    {{--                    --}}{{--                           Enter Destination--}}
    {{--                    --}}{{--                          </a> <i class="fas fa-truck" style="display: inline; margin-left: 10px"></i></p>--}}

    {{--                    --}}{{--                            <div id="address2"  class=" toggle none" >--}}
    {{--                    --}}{{--                                <input type="text" disabled value="Nigeria" width="100">--}}
    {{--                    --}}{{--                                <select name="state" id="state" class="country_select"--}}
    {{--                    --}}{{--                                        style="@error('state') border-color:red; @enderror">--}}
    {{--                    --}}{{--                                    <option>States - Fee</option>--}}
    {{--                    --}}{{--                                    @foreach($shipping as $shippings)--}}
    {{--                    --}}{{--                                        <option value="{{$shippings->fee}}">{{$shippings->state}} ---}}
    {{--                    --}}{{--                                            ₦{{number_format($shippings->fee)}} </option>--}}
    {{--                    --}}{{--                                    @endforeach--}}
    {{--                    --}}{{--                                </select>--}}
    {{--                    --}}{{--                            </div>--}}
    {{--                    --}}{{--                        </div>--}}
    {{--                    --}}{{--                    </div>--}}

    {{--                    --}}{{--                    <div class="row justify-content-around">--}}
    {{--                    --}}{{--                        <div class="col-3 left">--}}
    {{--                    --}}{{--                            <h6>Total</h6>--}}
    {{--                    --}}{{--                        </div>--}}
    {{--                    --}}{{--                        <div class="col-3 right">--}}
    {{--                    --}}{{--                            <p>120000</p>--}}
    {{--                    --}}{{--                        </div>--}}
    {{--                    --}}{{--                    </div>--}}
    {{--                    <br>--}}
    {{--                    <a href="/checkout">--}}
    {{--                        <button class="grey_button col-12" style=" border-radius: 20px;  padding: 9px 35px;">Proceed to--}}
    {{--                            Checkout--}}
    {{--                        </button>--}}
    {{--                    </a>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        </div>--}}
    {{--    @else--}}
    {{--        <div class="text-center" style="margin: 200px 50px">--}}
    {{--            <h3>Cart is currently Empty </h3>--}}
    {{--            <button class="grey_button"--}}
    {{--                    style=" color: white; margin-left:30px; border-radius: 20px;  padding: 9px 35px;">--}}
    {{--                <a href="/shop" style=" color: white; ">Continue Shopping</a>--}}
    {{--            </button>--}}

    {{--        </div>--}}
    {{--    @endif--}}

    <script>
        $(document).ready(function () {
            $('#address').click(function () {

                $('.toggle').toggleClass('none drop',);

            });
        });
    </script>
@endsection
