@extends('layout.layout')

@section('banner')

    <div class=" hero-wrap js-fullheight product-details-banner" id="blog-banner"   style="background-image: url('/website/images/shop.jpg'); "
         data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                 data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4 fh" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Shop/{{$product->name}}</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')





    <div class="container ">

        @if(session('session_message'))

            <div class="uk-alert-success" uk-alert style="margin-top: 60px">
                <a class="uk-alert-close" uk-close></a>
                <p> <span><i class="fas fa-check"></i></span>{{session()->get('session_message')}}</p>
            </div>
        @endif


        <div class="product_img_area">
            <div class="row">
                <div class="col-md-6">

                    <img src="{{asset('storage/'.$product->images)}}" alt="" class="img-zoom img_product">
                </div>

                <div class="col-md-6">
                    <div class="product_details">
                        <h2>{{$product->name}}</h2>
                        <hr>
                        <h4>&#8358; {{number_format($product->price)}}</h4>



                        <form action="/cart/{{$product->id}}" method="post">
                            @csrf
                            <input type="number" style="width:50px; padding-left: 10px" value="1" min="1" name="quantity">
                            <button class="grey_button" style=" margin-left:30px; border-radius: 20px;  padding: 15px 35px; outline:none;">Add to cart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="description">
            <a href="" style="margin-right: 20px" class="active-link">Description</a>
            <hr>

            @if( $product->description  == "")
                <div class="empty">

                    <img class="empty" src="/website/images/empty.svg" alt="">
                    <h6 class="text-center">No Description</h6>
                </div>
            @else
            <h4 style="margin-top: 50px"><strong>ABOUT</strong></h4>
            <p style="margin-top: 50px">{!! $product->description !!}</p>
            @endif

        </div>


        <hr style=" margin-top: 200px;">

        <h4 class="rp-text" >Related products</h4>

        <div class="row related_product" style="margin-bottom: 100px">

            @foreach($randoms as $product)
                <div class=" col-4 col-xs-4  col-md-4 product-details-card">
                    <a href="/detail/{{$product->name}}">
                        <img src="{{asset('storage/'.$product->images)}}" height="300" class="img" >
                        <div class="caption">
                            <h5><strong>{{$product->name}}</strong></h5>
                            <h6>&#8358; {{ number_format($product->price) }}</h6>
                        </div>
                    </a>

                </div>
            @endforeach

        



        </div>

    </div>

@endsection
