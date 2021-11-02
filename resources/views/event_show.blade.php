@extends('layout.layout')

@section('banner')
    <div class="hero-wrap js-fullheight" style="background-image: url('website/images/shop.jpg'); background-size: 300px  "
     style="background-image: url({{asset('storage/'.$events->images)}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Home</a></span> <span>Events</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> {{$events->name}}</h1>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('content')
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">

                    <h2 class="mb-3 font-weight-bold">{{$events->title}}</h2>


                    <article>
                        {!! $events->body !!}
                    </article>
                    <div class="tag-widget post-tag-container mb-5 mt-5">
                        <div class="tagcloud">
<!-- {{--                            @foreach($events->tag as $tag)--}}
{{--                                <a href="/blog?tag={{$tag->name}}" class="tag-cloud-link"> {{$tag->name}} </a>--}}
{{--                            @endforeach--}} -->
                        </div>
                    </div>


                    <!-- <div class="about-author d-flex p-4 bg-light">
                        <div class="bio mr-5">
                            <img src="/website/images/person_12.jpg" alt="Image placeholder" class="img-fluid mb-4">
                        </div>
                        <div class="desc">
                            <h3>George Washington</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                        </div>
                    </div> -->



                    {{--COMMENT SECTION--}}

                    <div class="pt-5 mt-5">
<!-- {{--                        <h3 class="mb-5">sombody Comment(s)</h3>--}}
{{--                        <ul class="comment-list">--}}

{{--                            @foreach($article->comment as $comment)--}}

{{--                                <li class="comment">--}}
{{--                                    <div class="vcard bio">--}}
{{--                                        <img src="/website/images/person_1.jpg" alt="Image placeholder">--}}
{{--                                    </div>--}}
{{--                                    <div class="comment-body">--}}
{{--                                        <h3>{{$comment->name}}</h3>--}}
{{--                                        <p>{{$comment->body}}</p>--}}
{{--                                        <div class="meta">{{$comment->created_at->format('d M Y')}}</div>--}}
{{--                                        <p><a href="#" class="reply">Reply</a></p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}

{{--                            @endforeach--}}
{{--                        </ul >--}} -->
                        <!-- END comment-list -->

<!-- {{--                        <div class="comment-form-wrap pt-5">--}}
{{--                            <h3 class="mb-5">Leave a comment</h3>--}}
{{--                            <form action="/comment" method="post"  class="p-5 bg-light">--}}
{{--                                @csrf--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="name">Name </label>--}}
{{--                                    <input type="text"name="name" class="form-control" id="name">--}}
{{--                                </div>--}}

{{--                                <input type="hidden" name="article_id" value="{{$article->id}}">--}}

{{--                                <div class="form-group">--}}
{{--                                    <label for="message">Message</label>--}}
{{--                                    <textarea name="body" id="message" cols="30" rows="10" class="form-control"></textarea>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">--}}
{{--                                </div>--}}

{{--                            </form>--}}
{{--                        </div>--}} -->
                    </div>

                </div> <!-- .col-md-8 -->



                                <div class="col-lg-4 sidebar ftco-animate">
<!-- {{--                    <div class="sidebar-box">--}}
{{--                        <form action="#" class="search-form">--}}
{{--                            <div class="form-group">--}}
{{--                                <span class="icon icon-search"></span>--}}
{{--                                <input type="text" class="form-control" placeholder="Type a keyword and hit enter">--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}} -->
                    <div class="sidebar-box ftco-animate">
                        <h3>Categories</h3>
                        <ul class="categories">
                            @foreach($tags as $tag)
                                <li><a href="/blog?tag={{$tag->name}}">{{$tag->name}} <span>{{$tag->getTagCount($tag->id)}}</span></a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Popular Articles</h3>

                        @foreach($randomArticles as $randomArticle )

                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4" style= "background-image: url({{asset('/storage/'.$randomArticle->images)}});"></a>
                                <div class="text">
                                    <h3 class="heading"><a href="#">{{$randomArticle->title}}</a></h3>
                                    <div class="meta">
                                        <div><a href="#"><span class="icon-calendar"></span> {{ $randomArticle->created_at->format('d M Y') }}</a></div>
                                        <div><a href="#"><span class="icon-person"></span>{{$randomArticle->getAuthor($randomArticle->id)}}</a></div>
                                        <div><a href="#"><span class="icon-chat"></span> {{$randomArticle->getCommentNumber($randomArticle)}}</a></div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Tag Cloud</h3>
                        <ul class="tagcloud">
                            @foreach($tags as $tag)
                                <a href="/blog?tag={{$tag->name}}" class="tag-cloud-link">{{$tag->name}}</a>
                            @endforeach
                        </ul>
                    </div>

                    <!-- <div class="sidebar-box subs-wrap">
                        <h3>Subcribe to our Newsletter</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
                        <form action="#" class="subscribe-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email Address">
                                <input type="submit" value="Subscribe" class="mt-2 btn btn-white submit">
                            </div>
                        </form>
                    </div> -->

                    <!-- <div class="sidebar-box ftco-animate">
                        <h3>Archives</h3>
                        <ul class="categories">
                            <li><a href="#">September 2018 <span>(6)</span></a></li>
                            <li><a href="#">August 2018 <span>(8)</span></a></li>
                            <li><a href="#">July 2018 <span>(2)</span></a></li>
                            <li><a href="#">June 2018 <span>(7)</span></a></li>
                            <li><a href="#">May 2018 <span>(5)</span></a></li>
                            <li><a href="#">April 2018 <span>(3)</span></a></li>
                        </ul>
                    </div> -->


                                    <div class="sidebar-box ftco-animate">
                                        <h3>Services</h3>
                                        <p>Agro materials,cultivars and machines are available in our store. Let’s beautify your homes,offices,giving it natural & heart melting look. </p>
                                    </div>
                </div><!-- END COL -->

            </div>
        </div>
    </section> <!-- .section -->
@endsection
