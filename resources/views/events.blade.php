@extends('layout.layout')

@section('banner')
    <div class="hero-wrap js-fullheight" style="background-image: url('website/images/bg_333.jpg');"
         data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                 data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Ovate Agro</h1>
                    <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We grow your Agribusiness with every Agro materials,cultivars and machines available in our store.</p>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Events</h2>
                    <p>Be up to date with recent happenings in the Agro World</p>
                </div>
            </div>

            <div class="row">
                @foreach($events as $event)
                    <div class="col-md-6">
                        <div  class="blog-entry ftco-animate">
                            <a href="/event/{{$event->id}}" class="img img-2"
                               style="background-image: url({{asset("storage/". $event->images)}});"></a>

                            <div class="text text-2 pt-2 mt-3">
                                <span class="big">Ovate Agro</span>
                                <h3 class="mb-4" style="margin-bottom: 40px"><a href="/event/{{$event->id}}">{{$event->name}}</a></h3>

                                <div class="author mb-4 d-flex align-items-center">
{{--                                    <a href="#" class="img"--}}
{{--                                       style="background-image: url({{asset('/storage/'.$event->user->avatar)}}"></a>--}}
                                    <div class="ml-3 info">
                                        <span>Date of Event</span>
{{--                                        <h3><a href="#">Somebofy}</a></h3>--}}
                                        <h3>{{$event->date}}</h3>
                                    </div>
                                </div>
                                <div class="meta-wrap align-items-center">
                                    <div class="half">
                                        <p><a href="/event/{{$event->id}}" class="btn btn-primary px-3 py-2">Continue Reading</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach


            </div>


            {{$events->links('pagination-links')}}

    </section>
@endsection
