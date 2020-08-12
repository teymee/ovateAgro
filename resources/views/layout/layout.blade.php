<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ovate Agro</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

    <link rel="stylesheet" href="/website/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/website/css/animate.css">

    <link rel="stylesheet" href="/website/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/website/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/website/css/magnific-popup.css">

    <link rel="stylesheet" href="/website/css/aos.css">

    <link rel="stylesheet" href="/website/css/ionicons.min.css">

    <link rel="stylesheet" href="/website/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/website/css/jquery.timepicker.css">


    <link rel="stylesheet" href="/website/css/flaticon.css">
    <link rel="stylesheet" href="/website/css/icomoon.css">
    <link rel="stylesheet" href="/website/css/style.css">

    <style>
        @media (max-width: 480px) {

            #blog-banner {
                background-image: url('website/images/bg_34.jpg');
            }
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/">Ovate Agro</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{Request::path() === '/' ? 'active' : ' '}}"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item {{Request::path()  === 'blog' ? 'active' : ''}}"><a href="/blog" class="nav-link">Blog</a></li>
                <li class="nav-item {{Request::path()  === 'events' ? 'active' : ''}}"><a href="/events" class="nav-link">Event</a></li>
{{--                <li class="nav-item active dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="dropdown04">--}}
{{--                        <a class="dropdown-item" href="index.html">Home with slider</a>--}}
{{--                        <a class="dropdown-item" href="index2.html">Home with full slider</a>--}}
{{--                        <a class="dropdown-item" href="index3.html">Home with parallax</a>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item{{Request::path()  === 'blog' ? 'active' : ''}}"><a href="/blog" class="nav-link">Blog</a></li>--}}
                <li class="nav-item {{Request::path() === 'contact' ? 'active' : ''}}"><a href="/contact" class="nav-link">Contact</a></li>
            </ul>
                @auth()

                    <li class="nav-item dropdown" style="list-style: none;">
                        <a  style="color: ghostwhite" class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Welcome  {{ucwords(strtolower(auth()->user()->name))}}</a>

                        <div class="dropdown-menu" aria-labelledby="dropdown04" >
                            <form action="/logout" method="post" >
                                @csrf
                                @method('POST')
                                <div class="container">
                                    <button  role="submit" style=" cursor:pointer; border: none; background-color: transparent; color: black; text-align: center; font-size: 13px">
                                        <span class="menu-title">Logout</span>
                                    </button>
                                </div>
                            </form>
                            @can('allow_audience')
                            <a class="dropdown-item" href="/admin" style="font-size: 13px">Dashboard</a>
                            @endcan

                        </div>
                    </li>

                @else
                    <li  style="list-style: none; color: ghostwhite" class="nav-item {{Request::path() === '/' ? 'active' : ''}}"><a style=" color: white"href="/login" target="_blank" class="nav-link">Login</a></li>
                @endauth

                {{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Post</a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="dropdown04">--}}
{{--                        <a class="dropdown-item" href="post-right-sidebar.html">Post with right sidebar</a>--}}
{{--                        <a class="dropdown-item" href="post-left-sidebar.html">Post with left sidebar</a>--}}
{{--                        <a class="dropdown-item" href="post-no-sidebar.html">Post no sidebar</a>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Archives</a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="dropdown04">--}}
{{--                        <a class="dropdown-item" href="destination.html">Destination</a>--}}
{{--                        <a class="dropdown-item" href="tag.html">Tag</a>--}}
{{--                        <a class="dropdown-item" href="author-post.html">Authors Post</a>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="dropdown04">--}}
{{--                        <a class="dropdown-item" href="right-sidebar.html">Right Sidebar</a>--}}
{{--                        <a class="dropdown-item" href="left-sidebar.html">Left Sidebar</a>--}}
{{--                        <a class="dropdown-item" href="author.html">Authors Page</a>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>--}}

        </div>
    </div>
</nav>
<!-- END nav -->

@yield('banner')
@yield('content')

<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">About us</h2>
                    <p>We are young professional passionate about food security & nature preservation in the world .</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Categories/Tags</h2>
                    <ul class="list-unstyled categories">
                        @foreach($tags as $tag)
                            <li><a href="/blog?tag={{$tag->name}}">{{$tag->name}} <span>{{$tag->getTagCount($tag->id)}}</span></a></li>
                        @endforeach
                    </ul>

{{--                    <ul class="list-unstyled categories">--}}
{{--                        <li><a href="#">Africa <span>(6)</span></a></li>--}}
{{--                        <li><a href="#">Asia <span>(8)</span></a></li>--}}
{{--                        <li><a href="#">Australia <span>(2)</span></a></li>--}}
{{--                        <li><a href="#">Europe <span>(2)</span></a></li>--}}
{{--                        <li><a href="#">North America <span>(7)</span></a></li>--}}
{{--                        <li><a href="#">South America <span>(5)</span></a></li>--}}
{{--                    </ul>--}}
                </div>
            </div>
{{--            <div class="col-md">--}}
{{--                <div class="ftco-footer-widget mb-4">--}}
{{--                    <h2 class="ftco-heading-2">Archives</h2>--}}
{{--                    <ul class="list-unstyled categories">--}}
{{--                        <li><a href="#">September 2018 <span>(6)</span></a></li>--}}
{{--                        <li><a href="#">August 2018 <span>(8)</span></a></li>--}}
{{--                        <li><a href="#">July 2018 <span>(2)</span></a></li>--}}
{{--                        <li><a href="#">June 2018 <span>(7)</span></a></li>--}}
{{--                        <li><a href="#">May 2018 <span>(5)</span></a></li>--}}
{{--                        <li><a href="#">April 2018 <span>(3)</span></a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">Abeokuta, Nigeria</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">(234) 8133097124</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">ov8farms@yahoo.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p> Copyright &copy;<script>document.write(new Date().getFullYear());</script> </p>
{{--                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->--}}
{{--                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>--}}
{{--                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>--}}
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="/website/js/jquery.min.js"></script>
<script src="/website/js/jquery-migrate-3.0.1.min.js"></script>
<script src="/website/js/popper.min.js"></script>
<script src="/website/js/bootstrap.min.js"></script>
<script src="/website/js/jquery.easing.1.3.js"></script>
<script src="/website/js/jquery.waypoints.min.js"></script>
<script src="/website/js/jquery.stellar.min.js"></script>
<script src="/website/js/owl.carousel.min.js"></script>
<script src="/website/js/jquery.magnific-popup.min.js"></script>
<script src="/website/js/aos.js"></script>
<script src="/website/js/jquery.animateNumber.min.js"></script>
<script src="/website/js/bootstrap-datepicker.js"></script>
<script src="/website/js/jquery.timepicker.min.js"></script>
<script src="/website/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="/website/js/google-map.js"></script>
<script src="/website/js/main.js"></script>

</body>
</html>
