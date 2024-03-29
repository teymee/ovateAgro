@extends('layout.layout')

@section('banner')
    <!-- <div  class=" cart-hero hero-wrap js-fullheight" id="blog-banner" style="background-image: url('website/images/shop.jpg'); background-size: 300px "
          data-stellar-background-ratio="0.5">
        <div class="overlay" style="height: 200vh"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                 data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-3 fh" data-scrollax="properties: { translateY: '30%', opacity: 1.3 }">Shop</h1>
              </div>
            </div>
        </div>
    </div> -->
    <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#AFD557" fill-opacity="1" d="M0,192L80,197.3C160,203,320,213,480,224C640,235,800,245,960,229.3C1120,213,1280,171,1360,149.3L1440,128L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
    </svg>
    <div class="container text-center">
        <h1 class="cart-title" style="margin-top: -190px; color: white;">Shop</h1>
    </div>
@endsection

@section('content')
    @if( $products->count()  == 0)
        <div class="empty">

            <img class="empty" src="/website/images/empty.svg" alt="">
            @if($products->count()  == 0 && Request::path() == 'search')

                <h6 class="text-center">Sorry We don't have this product in our store</h6>
            @else


            <h6 class="text-center">Shop's Currently Empty</h6>
            @endif
        </div>

    @else


    <div class="container" style="margin-top: 100px; margin-bottom: 200px">
        <div class="shop-search">
            <h6>Showing all {{$products->count()}} products</h6>

            <form action="/search" method="POST">
                @csrf

                <input type="text" name="search"
                       style="border: none ; border-bottom: 1px solid #cef362; width: 200px;outline:none;"
                       placeholder= "Search Product">
                <i class="fas fa-search special-tag"></i>
            </form>

        </div>

        <div class="row" style="margin-top: 11%">

            @foreach($products as $product)
            <div class="col-xs-4 col-6  col-md-4 product-card">
                <a href="/detail/{{$product->name}} " class="">
                    <img src="{{asset('/storage/'.$product->images)}}"  class="images" alt="{{$product->name}}">
                    <div class="caption text-center">
                        <h5><strong>{{$product->name}}</strong></h5>
                        <h6><strong>&#8358; {{ number_format($product->price) }}</strong></h6>
                    </div>
                </a>

            </div>

            @endforeach


        </div>
        <div class=" d-flex justify-content-center">
            {{$products->links()}}
        </div>
    </div>
    @endif
@endsection
