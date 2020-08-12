@extends('layout.layout')

@section('banner')

    <section class="home-slider js-fullheight owl-carousel">
        <div class="slider-item js-fullheight" style="background-image:url(website/images/bg_4.jpg);">
            <div class="overlay"></div>
            <div class="container-fluid">
                <div class="row no-gutters slider-text slider-text-2 js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                    <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                        <h1 class="mb-4 fh" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Ovate Agro</h1>
                        <p class="p" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We grow your Agribusiness with every Agro materials,cultivars and machines available in our store.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image:url(website/images/bg_5.jpg);">
            <div class="overlay"></div>
            <div class="container-fluid">
                <div class="row no-gutters slider-text slider-text-2 js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                    <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                        <h1 class="mb-4 sh" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Explore Our Aesthetics</h1>
                        <p  class="p" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Let’s beautify your homes,offices,giving it natural & heart melting look.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


{{--    <section class="home-slider js-fullheight owl-carousel">--}}
{{--        <div class="slider-item js-fullheight" style="background-image:url(website/images/bg_4.jpg);">--}}
{{--            <div class="overlay"></div>--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="row no-gutters slider-text slider-text-2 js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">--}}
{{--                    <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">--}}
{{--                        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Ovate Agro</h1>--}}
{{--                        <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We grow your Agribusiness with every Agro materials,cultivars and machines available in our store. </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="slider-item js-fullheight" style="background-image:url(website/images/bg_5.jpg);">--}}
{{--            <div class="overlay"></div>--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="row no-gutters slider-text slider-text-2 js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">--}}
{{--                    <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">--}}
{{--                        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Explore Our Aesthetics</h1>--}}
{{--                        <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Let’s beautify your homes,offices,giving it natural & heart melting look. </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


@endsection

@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Agricultural Sectors</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <a href="#" class="destination-entry d-flex align-items-center justify-content-center img" style="background-image: url(website/images/vet.jpg);">
                        <span class="overlay"></span>
                        <div class="text text-center">
                            <h3>Veterinary</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 ftco-animate">
                    <a href="#" class="destination-entry d-flex align-items-center justify-content-center img" style="background-image: url(website/images/irrigation.jpg);">
                        <span class="overlay"></span>
                        <div class="text text-center">
                            <h3>Soil and Water Conservation</h3>

                        </div>
                    </a>
                </div>
                <div class="col-md-4 ftco-animate">
                    <a href="#" class="destination-entry d-flex align-items-center justify-content-center img" style="background-image: url(website/images/bg_3.jpg);">
                        <span class="overlay"></span>
                        <div class="text text-center">
                            <h3>Animal Husbandary</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 ftco-animate">
                    <a href="#" class="destination-entry d-flex align-items-center justify-content-center img" style="background-image: url(website/images/bg_4.jpg);">
                        <span class="overlay"></span>
                        <div class="text text-center">
                            <h3>Farm Mechanisation </h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 ftco-animate">
                    <a href="#" class="destination-entry d-flex align-items-center justify-content-center img" style="background-image: url(website/images/bg_5.jpg);">
                        <span class="overlay"></span>
                        <div class="text text-center">
                            <h3>Soil Science</h3>

                        </div>
                    </a>
                </div>
                <div class="col-md-4 ftco-animate">
                    <a href="#" class="destination-entry d-flex align-items-center justify-content-center img"
                       style="background-image: url(website/images/pest.jpg);">
                        <span class="overlay"></span>
                        <div class="text text-center">
                            <h3>Pest and Pathogens</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(website/images/bg_1.jpg);" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="1">0</strong>
                            <span>Nigeria</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="131">0</strong>
                            <span>Ease of Doing Business rank</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="2028">0</strong>
                            <span>GDP per capita, US$ (2018)</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="910770">0</strong>
                            <span>Area, sq km</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="195874740">0</strong>
                            <span>Population</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Articles</h2>
                </div>
            </div>
            <div class="row">
                @foreach($articles as $article)
                    <div class="col-md-4">
                        <div  class="blog-entry ftco-animate">
                            <a href="/article/{{$article->id}}" class="img img-2"
                               style="background-image: url({{asset("storage/". $article->images)}});"></a>
                            {{--                            website/images/image_1.jpg--}}
                            <div class="text text-2 pt-2 mt-3">
                                <span class="big">Ovate Agro</span>
                                <h3 class="mb-4" style="margin-bottom: 40px"><a href="/article/{{$article->id}}">{{$article->title}}</a></h3>
                                <p class="mb-4">{{$article->excerpt}}</p>
                                <div class="author mb-4 d-flex align-items-center">
                                    <a href="#" class="img"
                                       style="background-image: url({{asset('/storage/'.$article->user->avatar)}}"></a>
                                    <div class="ml-3 info">
                                        <span>Written by</span>
                                        <h3><a href="#">{{ucfirst( $article->getAuthor($article->id))}}</a></h3>
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
        </div>
    </section>

@endsection
