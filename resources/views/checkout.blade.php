@extends('layout.layout')

@section('banner')
    <div  class=" cart-hero hero-wrap js-fullheight" id="blog-banner" style="background-image: url('website/images/cart.jpg');  "
          data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                 data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-3 fh" data-scrollax="properties: { translateY: '30%', opacity: 1.3 }">Checkout</h1>
                    {{--                                        <p class="p" data-scrollax="properties: { translateY: '30%', opacity: 1.3 }">We grow your Agribusiness with every Agro materials,cultivars and machines available in our store.</p>--}}
                </div>
            </div>
        </div>
    </div>
    <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#AFD557" fill-opacity="1" d="M0,192L80,197.3C160,203,320,213,480,224C640,235,800,245,960,229.3C1120,213,1280,171,1360,149.3L1440,128L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>

    </svg>
    <div class="container text-center">
        <h1 class="cart-title" style="margin-top: -190px; color: white;">Checkout</h1>
    </div>
@endsection

@section('content')

    <!--================Checkout Area =================-->
    <section class="checkout_area padding_top" style="margin-bottom:100px; margin-top:200px;">
        <div class="container">
{{--            <div class="container">--}}
{{--                @if(session('session_message'))--}}

{{--                    <div class="uk-alert-success" uk-alert style="margin-top: 60px">--}}
{{--                        <a class="uk-alert-close" uk-close></a>--}}
{{--                        <p><span><i class="fas fa-check"></i></span>{{session()->get('session_message')}}</p>--}}
{{--                    </div>--}}
{{--                @endif--}}
{{--            </div>--}}

            @if(session()->has('session_message'))
                <div class="uk-alert-success" uk-alert style="margin-top: 60px">
                    <a class="uk-alert-close" uk-close></a>
                    <p><span><i class="fas fa-check"></i></span>{{session()->get('session_message')}}</p>
                </div>

            @endif

            @if($errors->any())
                <div class="uk-alert-success" uk-alert style="margin-top: 60px">
                    <a class="uk-alert-close" uk-close></a>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>  <p><span><i  style="color:red;" class="fas fa-exclamation-circle"></i></span>{!! $error !!}</p> </li>
                        @endforeach
                    </ul>

                </div>
            @endif


            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3> <strong>Billing Details</strong></h3>


                        <form class="row contact_form" method="POST"  action="{{ route('pay')}}" accept-charset="UTF-8"
                              class="form-horizontal" role="form">
                            {{--                        <form class="row contact_form" action="/pay" method="post" >--}}
                            @csrf

                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="fullname" name="fullname"
                                       placeholder="Fullname"
                                       value="{{(auth()->user()) ? auth()->user()->name  : old('fullname')}}"
                                       style="@error('fullname') border-color:red; @enderror"
                                />

                            </div>

                            <div class="col-md-12 form-group p_star">
                                <input type="tel" class="form-control" id="phone_number" name="phone"
                                       placeholder="Phone Number"
                                       value="{{(auth()->user()) ? auth()->user()->phone  : old('phone')}}"
                                       style="@error('phone') border-color:red; @enderror"
                                />

                            </div>

                            <div class="col-md-12 form-group p_star">
                                <input type="email" class="form-control" id="email" name="email"
                                       placeholder="Email Address"
                                       value="{{(auth()->user()) ? auth()->user()->email  : old('email')}}"
                                       style="@error('email') border-color:red; @enderror"
                                />

                            </div>



                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="company" readonly placeholder="Nigeria"/>
                            </div>


                            <div class="col-md-12 form-group p_star">
                                <select name="state" id="state" class="form-control" onclick="handleClick()"
                                        style="@error('state') border-color:red; @enderror">
                                    <option>States - Fee</option>
                                    @foreach($shipping as $shippings)
                                        <option  id="stateValue" class="form-control" value="{{intval($shippings->fee)}}">{{$shippings->state}} -
                                            ₦{{number_format($shippings->fee)}} </option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="city" name="city" placeholder="Town/City"
                                       value="{{old('city')}}"
                                       style="@error('city') border-color:red; @enderror"
                                />
                            </div>

                            <div class="col-md-12 form-group p_star">
                                <textarea style="@error('address') border-color:red; @enderror"
                                          class="form-control" name="address" id="address" rows="3"
                                          placeholder="Address of Delivery">{{old('address')}}</textarea>

                            </div>


                            <div class="col-md-12 form-group p_star">
                                <input type="hidden" readonly class="form-control" id="userId" name="userId"
                                       placeholder="User ID"
                                       value="{{ auth()->user()->id  }}"
                                       style="@error('userId') border-color:red; @enderror"
                                />

                            </div>

                            <div class="col-md-12 form-group">
                                <textarea style="@error('extra') border-color:red; @enderror"
                                          class="form-control" name="extra" id="extra" rows="3"
                                          placeholder="Extra Details (If any)">{{old('extra')}}</textarea>

                            </div>

                            {{--HIDDEN--}}

                            <div class="col-md-6 form-group p_star">
                                {{--                                <input type="hidden" data-placeholder="Last name" class="form-control" id="cartId" name="cart_id" value="{{$cartId}}" />--}}
                                <input type="hidden" id="totalAmount" value="{{\Cart::getTotal() * 100}} ">
                            </div>


                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Your Order</h2>
                            <ul class="list">
                                <li>
                                    <a href="#">Product
                                        <span>Total</span>
                                    </a>
                                </li>
                                @foreach($cartContents as $cartContent)
                                    <li>
                                        <a href="#">{{$cartContent->name}}
                                            <span class="middle  text-center">{{$cartContent->quantity}}</span>
                                            <span
                                                class="last" >&#8358;{{ number_format(\Cart::get($cartContent->id)->getPriceSum())}}</span>
                                        </a>
                                    </li>
                                @endforeach


                            </ul>
                            <ul class="list list_2">
                                <li>
                                    <a href="#">Subtotal
                                        <span style="color:black">&#8358;{{number_format(\Cart::getsubTotal())}}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" style="color:black">Shipping cost

                                        <span style="color:black"
                                              id="cost"> ---</span>
                                    </a>
                                </li>

                            </ul>
                            <br><br>
                            <div class="payment_item active">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option6" name="selector" checked/>
                                    <label for="f-option6">Paystack </label>
                                    <img src="{{asset('website/images/card.jpg')}}" alt=""/>
                                    <div class="check"></div>
                                </div>
                                <p>
                                    Trusted and guaranteed.
                                </p>
                            </div>
                            <div class="creat_account">
                                <input type="checkbox" id="f-option4" name="selector" checked/>
                                <label for="f-option4">I’ve read and accept the </label>
                                <a href="#">terms & conditions*</a>
                            </div>


                            {{--PAYSTACK BUTTON--}}

                            <div class="row" style="margin-bottom:40px;">
                                <div class="col-md-8 col-md-offset-2">

                                    <input type="hidden" name="email" id="email2" value="">
                                    <input type="hidden" name="first_name" id="fullname" value="">
                                    <input type="hidden" name="orderID" value="">
                                    <input type="hidden" name="amount" id="pay1" value="">
                                    <input type="hidden" name="quantity" value="1">
                                    <input type="hidden" name="currency" value="NGN">
                                    <input type="hidden" name="metadata[]" id="metadata">
{{--                                              <input type="hidden" name="metadata"--}}
{{--                                             value="{{ json_encode($array = ['key_name' => 'value','id' => $cartContent->id]) }}" >--}}
{{--                              --}}
{{--                                     For other necessary things you want to add to your payload. it is optional though--}}
{{--                                   --}}
                                    <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                                    {{ csrf_field() }}

                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">


                                    <p class="d-flex justify-content-center">
                                        <button style="" class="btn_2" onmousedown="fetchMetaValues()" type="submit"
                                                value="Pay Now!">
                                            <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                                        </button>
                                    </p>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{--            --}}
        </div>
    </section>
    <!--================End Checkout Area =================-->

    <script>

        function fetchMetaValues() {


            var a = document.getElementById("email").value;
            document.getElementById("email2").value = a;

            var totalAmount = document.getElementById("totalAmount").value;
            var shippingFee = document.getElementById('state').value;
            var pay = parseInt(totalAmount) + (parseInt(shippingFee) * 100);
            document.getElementById("pay1").value = pay;

            let metadata = document.getElementById('metadata');
            let fullname = document.getElementById('fullname').value;
            let phone_number = document.getElementById('phone_number').value;
            // let cartId = document.getElementById('cartId').value;
            let email = document.getElementById('email').value;
            let userId = document.getElementById('userId').value;
            let state = document.getElementById('state').value;
            let city = document.getElementById('city').value;
            let address = document.getElementById('address').value;
            let extra = document.getElementById('extra').value;
            let services = $('#services').is(':checked');

            // let services = document.getElementById('services').value;
            let fid = {
                'fullname': fullname,
                'phone': phone_number,
                'userId' : userId,
                'email': email,
                'city': city,
                'state': state,
                'address': address,
                'extra': extra,
                'services': services
            };
            metadata.value = JSON.stringify(fid);
        }


        function handleClick() {
            var fee = document.getElementById('state').value;
            if( fee == 'States - Fee'){
                console.log(fee)
            }else{
                var n = Number(fee)
                var finalFee = document.getElementById('cost').innerHTML = "&#8358;" + n.toLocaleString();
            }

        }
    </script>


@endsection
