@extends('layout.layout')

@section('banner')
    <div class=" hero-wrap js-fullheight" id="blog-banner" style="background-image: url('website/images/bg_3.jpg');  "
         data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                 data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4 fh" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Blog</h1>
{{--                    <p class="p" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We grow your Agribusiness with every Agro materials,cultivars and machines available in our store.</p>--}}
                </div>
            </div>
        </div>
    </div>
@endsection


@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-7 heading-section text-center ftco-animate article-header">
                    <h2 class="mb-4">Articles</h2>
                    <p>“Investments in agriculture are the best weapons against hunger,poverty and they have made life better for billions of people”.</p>
                    <p><small><i><strong>Bill And Melinda Gate Foundation</strong></i></small></p>
                </div>
            </div>
            @if( $articles->count()  == 0)
                <div class="empty">

                    <img class="empty" src="/website/images/empty.svg" alt="">
                    <h6 class="text-center">No Current Article</h6>
                </div>
            @else
            <div class="row">
                @foreach($articles as $article)
                    <div class="col-md-6">
                        <div  class="blog-entry ftco-animate">
                            <a href="/article/{{$article->id}}" class="img img-2"
                               {{-- REGULAR HOSTING --}}
                               {{--{{asset('storage/'.$article->images )}}--}}
                               style="background-image: url({{asset("uploads/". $article->images)}});"></a>
{{--                            website/images/image_1.jpg--}}
                            <div class="text text-2 pt-2 mt-3">
                                <span class="big">Ovate Agro</span>
                                <h3 class="mb-4" style="margin-bottom: 40px"><a href="/article/{{$article->id}}">{{$article->title}}</a></h3>
                                <p class="mb-4">{{$article->excerpt}}</p>
                                <div class="author mb-4 d-flex align-items-center">
                                    <a href="#" class="img"
                                       style="background-image: url({{asset('uploads/'.$article->user->avatar)}}"></a>
                                    <div class="ml-3 info">
                                        <span>Written by</span>
                                        <h3><a href="#">{{ucwords($article->getAuthor($article->id))}}</a></h3>
                                            <span>{{$article->created_at->format('d M, Y')}}</span>
                                    </div>
                                </div>
                                <div class="meta-wrap align-items-center">
                                    <div class="half order-md-last">
                                        <p class="meta">
                                            <span><i class="icon-comment"></i>{{$article->getCommentNumber($article->id)}}</span>
                                        </p>
                                    </div>
                                    <div class="half">
                                        <p><a href="/article/{{$article->id}}" class="btn btn-primary px-3 py-2">Continue Reading</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach


            </div>

            @if(!request('tag'))
        {{$articles->links('pagination-links')}}
        @endif
        @endif
    </section>


@endsection
