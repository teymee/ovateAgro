<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ovate Agro Admin panel</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">

    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/ovate-logo.png"/>
</head>
<body>
<div class="container-scroller">


{{-- HEADER--}}
{{--    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">--}}
{{--        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">--}}
{{--            <a class="navbar-brand brand-logo" href="../../index.html"><img src="../../assets/images/logo.svg" alt="logo" /></a>--}}
{{--            <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>--}}
{{--        </div>--}}
{{--        <div class="navbar-menu-wrapper d-flex align-items-stretch">--}}
{{--            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">--}}
{{--                <span class="mdi mdi-menu"></span>--}}
{{--            </button>--}}
{{--            <div class="search-field d-none d-md-block">--}}
{{--                <form class="d-flex align-items-center h-100" action="#">--}}
{{--                    <div class="input-group">--}}
{{--                        <div class="input-group-prepend bg-transparent">--}}
{{--                            <i class="input-group-text border-0 mdi mdi-magnify"></i>--}}
{{--                        </div>--}}
{{--                        <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--            <ul class="navbar-nav navbar-nav-right">--}}
{{--                <li class="nav-item nav-profile dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">--}}
{{--                        <div class="nav-profile-img">--}}
{{--                            <img src="../../assets/images/faces/face1.jpg" alt="image">--}}
{{--                            <span class="availability-status online"></span>--}}
{{--                        </div>--}}
{{--                        <div class="nav-profile-text">--}}
{{--                            <p class="mb-1 text-black">David Greymaax</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">--}}
{{--                        <a class="dropdown-item" href="#">--}}
{{--                            <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item" href="#">--}}
{{--                            <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item d-none d-lg-block full-screen-link">--}}
{{--                    <a class="nav-link">--}}
{{--                        <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">--}}
{{--                        <i class="mdi mdi-email-outline"></i>--}}
{{--                        <span class="count-symbol bg-warning"></span>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">--}}
{{--                        <h6 class="p-3 mb-0">Messages</h6>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item preview-item">--}}
{{--                            <div class="preview-thumbnail">--}}
{{--                                <img src="../../assets/images/faces/face4.jpg" alt="image" class="profile-pic">--}}
{{--                            </div>--}}
{{--                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">--}}
{{--                                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>--}}
{{--                                <p class="text-gray mb-0"> 1 Minutes ago </p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item preview-item">--}}
{{--                            <div class="preview-thumbnail">--}}
{{--                                <img src="../../assets/images/faces/face2.jpg" alt="image" class="profile-pic">--}}
{{--                            </div>--}}
{{--                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">--}}
{{--                                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>--}}
{{--                                <p class="text-gray mb-0"> 15 Minutes ago </p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item preview-item">--}}
{{--                            <div class="preview-thumbnail">--}}
{{--                                <img src="../../assets/images/faces/face3.jpg" alt="image" class="profile-pic">--}}
{{--                            </div>--}}
{{--                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">--}}
{{--                                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>--}}
{{--                                <p class="text-gray mb-0"> 18 Minutes ago </p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <h6 class="p-3 mb-0 text-center">4 new messages</h6>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">--}}
{{--                        <i class="mdi mdi-bell-outline"></i>--}}
{{--                        <span class="count-symbol bg-danger"></span>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">--}}
{{--                        <h6 class="p-3 mb-0">Notifications</h6>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item preview-item">--}}
{{--                            <div class="preview-thumbnail">--}}
{{--                                <div class="preview-icon bg-success">--}}
{{--                                    <i class="mdi mdi-calendar"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">--}}
{{--                                <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>--}}
{{--                                <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item preview-item">--}}
{{--                            <div class="preview-thumbnail">--}}
{{--                                <div class="preview-icon bg-warning">--}}
{{--                                    <i class="mdi mdi-settings"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">--}}
{{--                                <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>--}}
{{--                                <p class="text-gray ellipsis mb-0"> Update dashboard </p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item preview-item">--}}
{{--                            <div class="preview-thumbnail">--}}
{{--                                <div class="preview-icon bg-info">--}}
{{--                                    <i class="mdi mdi-link-variant"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">--}}
{{--                                <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>--}}
{{--                                <p class="text-gray ellipsis mb-0"> New admin wow! </p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <h6 class="p-3 mb-0 text-center">See all notifications</h6>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item nav-logout d-none d-lg-block">--}}
{{--                    <a class="nav-link" href="#">--}}
{{--                        <i class="mdi mdi-power"></i>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item nav-settings d-none d-lg-block">--}}
{{--                    <a class="nav-link" href="#">--}}
{{--                        <i class="mdi mdi-format-line-spacing"></i>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">--}}
{{--                <span class="mdi mdi-menu"></span>--}}
{{--            </button>--}}
{{--        </div>--}}
{{--    </nav>--}}





<!-- partial -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="/admin"><img src="/assets/images/ovate-logo.png" alt="logo"
                                                                  style="width: 70px; height: 70px"/></a>
            <a class="navbar-brand brand-logo-mini" href="/admin"><img src="/assets/images/ovate-logo.png"
                                                                       alt="logo"
                                                                       style="width: 70px; height: 70px"/></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>

            {{--  SEARCH BAR--}}
            {{--            <div class="search-field d-none d-md-block">--}}
            {{--                <form class="d-flex align-items-center h-100" action="#">--}}
            {{--                    <div class="input-group">--}}
            {{--                        <div class="input-group-prepend bg-transparent">--}}
            {{--                            <i class="input-group-text border-0 mdi mdi-magnify"></i>--}}
            {{--                        </div>--}}
            {{--                        <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">--}}
            {{--                    </div>--}}
            {{--                </form>--}}
            {{--            </div>--}}
            {{-- END SEARCH BAR--}}


            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown"
                       aria-expanded="false">
                        <div class="nav-profile-img">
                            <img src="{{asset('uploads/'.auth()->user()->avatar)}}" alt="image">
                            <span class="availability-status online"></span>
                        </div>
                        <div class="nav-profile-text">
                            <p class="mb-1 text-black">{{auth()->user()->name}}</p>
                        </div>
                    </a>
                    <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">

                        <a class="dropdown-item" href="/">
                            <i class="mdi mdi-cached mr-2 text-success"></i> Website </a>
                        <div class="dropdown-divider"></div>

                        <form class="dropdown-item" action="/logout" method="post">
                            @csrf
                            @method('POST')
                            <div class="container">
                                <button role="submit"
                                        style=" cursor:pointer; border: none; background-color: transparent; color: black; text-align: center; font-size: 13px">
                                    <i class="mdi mdi-logout mr-2 text-primary"></i> <span
                                        class="menu-title">    Logout</span>
                                </button>
                            </div>
                        </form>
                        {{--                        <a class="dropdown-item" href="#">--}}
                        {{--                            <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>--}}
                    </div>
                </li>
                <li class="nav-item d-none d-lg-block full-screen-link">
                    <a class="nav-link">
                        <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                    </a>
                </li>

            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <div class="container-fluid page-body-wrapper">


    {{--SIDEBAR--}}

    <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <a href="#" class="nav-link">
                        <div class="nav-profile-image">
                            <img src="{{asset('uploads/'.auth()->user()->avatar)}}" alt="profile">
                            <span class="login-status online"></span>
                            <!--change to offline or busy as needed-->
                        </div>
                        <div class="nav-profile-text d-flex flex-column">
                            <span style="font-size: 12px"
                                  class=" font-weight-bold mb-2">{{auth()->user()->name}} </span>
                            <span class="text-success text-small">({{auth()->user()->role[0]->name}})</span> <br>
                            <span class="text-secondary text-small">{{auth()->user()->email}}</span>
                        </div>
                        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">
                        <span class="menu-title">Dashboard</span>
                        <i class="mdi mdi-home menu-icon"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/admin/articles">
                        <span class="menu-title"> Articles</span>
                        <i class="mdi mdi-library-books menu-icon"></i>

                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/events/create">
                        <span class="menu-title">Add Event</span>
                        <i class="mdi mdi-pen  menu-icon"></i>

                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/admin/create">
                        <span class="menu-title">Create Article</span>
                        <i class="mdi mdi-border-color menu-icon"></i>

                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/admin/events">
                        <span class="menu-title"> Events</span>
                        <i class=" mdi mdi-rss  menu-icon"></i>

                    </a>
                </li>


                @can('onlyAdmin')

                    <li class="nav-item">
                        <a class="nav-link" href="/admin/editors">
                            <span class="menu-title">Editors</span>
                            <i class="mdi mdi-account-check  menu-icon"></i>

                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false"
                           aria-controls="ui-basic1">
                            <span class="menu-title">Orders</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                        </a>
                        <div class="collapse" id="ui-basic1">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="/admin/pending">Pending Orders</a></li>
                                <li class="nav-item"><a class="nav-link" href="/admin/shippment">Shipped Orders</a></li>
                                <li class="nav-item"><a class="nav-link" href="/admin/delivered">Delivered Orders</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                           aria-controls="ui-basic">
                            <span class="menu-title">Products</span>
                            <i class="menu-arrow"></i>
                            <i class=" mdi mdi-bulletin-board  menu-icon"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="/products/add_product">Add Product</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="/products">View Products</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/admin/users">
                            <span class="menu-title">Registered Users</span>
                            <i class="mdi mdi-account  menu-icon"></i>

                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/admin/shipping">
                            <span class="menu-title">Shipping</span>
                            <i class="mdi mdi-contacts menu-icon"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/admin/tags">
                            <span class="menu-title">Tag</span>
                            <i class="mdi mdi-tag  menu-icon"></i>

                        </a>
                    </li>

                @endcan


                <li class="nav-item">
                    <a class="nav-link" href="/admin/profile">
                        <span class="menu-title">Profile</span>
                        <i class="mdi mdi-account-convert  menu-icon"></i>

                    </a>
                </li>


            </ul>
        </nav>
        <!-- partial -->


        {{--BODY--}}

        <div class="main-panel">
            <div class="content-wrapper">
                @yield('content')
            </div>


        {{--FOOTER--}}

        <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a
                            href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
                            class="mdi mdi-heart text-danger"></i></span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>


{{--SCRIPTS--}}


<script src="../../assets/vendors/js/vendor.bundle.base.js"></script>

<script src="../../assets/js/off-canvas.js"></script>
<script src="../../assets/js/hoverable-collapse.js"></script>
<script src="../../assets/js/misc.js"></script>

<script src="/../../assets/js/file-upload.js"></script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('summary-ckeditor');
</script>
</body>
</html>

{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}


{{--    <!-- Required meta tags -->--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
{{--    <title>Purple Admin</title>--}}
{{--    <!-- plugins:css -->--}}
{{--    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">--}}
{{--    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">--}}
{{--    <!-- endinject -->--}}
{{--    <!-- Plugin css for this page -->--}}
{{--    <!-- End plugin css for this page -->--}}
{{--    <!-- inject:css -->--}}
{{--    <!-- endinject -->--}}
{{--    <!-- Layout styles -->--}}
{{--    <link rel="stylesheet" href="assets/css/style.css">--}}
{{--    <!-- End layout styles -->--}}
{{--    <link rel="shortcut icon" href="assets/images/favicon.png" />--}}


{{--    <!-- Required meta tags -->--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
{{--    <title>Ovate Agro Admin Panel</title>--}}
{{--    <!-- plugins:css -->--}}
{{--    <link rel="stylesheet" href="/assets/vendors/mdi/css/materialdesignicons.min.css">--}}
{{--    <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">--}}
{{--    <!-- endinject -->--}}
{{--    <!-- Plugin css for this page -->--}}
{{--    <!-- End plugin css for this page -->--}}
{{--    <!-- inject:css -->--}}
{{--    <!-- endinject -->--}}
{{--    <!-- Layout styles -->--}}
{{--    <link rel="stylesheet" href="/assets/css/style.css">--}}
{{--    <!-- End layout styles -->--}}
{{--    <link rel="shortcut icon" href="/assets/images/favicon.png"/>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="container-scroller">--}}
{{--    <!-- partial:partials/_navbar.html -->--}}
{{--    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">--}}
{{--        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">--}}
{{--            <a class="navbar-brand brand-logo" href="index.html"><img src="/assets/images/logo.svg" alt="logo"/></a>--}}
{{--            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="/assets/images/logo-mini.svg"--}}
{{--                                                                           alt="logo"/></a>--}}
{{--        </div>--}}
{{--        <div class="navbar-menu-wrapper d-flex align-items-stretch">--}}
{{--            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">--}}
{{--                <span class="mdi mdi-menu"></span>--}}
{{--            </button>--}}
{{--            <div class="search-field d-none d-md-block">--}}
{{--                <form class="d-flex align-items-center h-100" action="#">--}}
{{--                    <div class="input-group">--}}
{{--                        <div class="input-group-prepend bg-transparent">--}}
{{--                            <i class="input-group-text border-0 mdi mdi-magnify"></i>--}}
{{--                        </div>--}}
{{--                        <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--            <ul class="navbar-nav navbar-nav-right">--}}
{{--                <li class="nav-item nav-profile dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown"--}}
{{--                       aria-expanded="false">--}}
{{--                        <div class="nav-profile-img">--}}
{{--                            <img src="{{asset('/storage/'.auth()->user()->avatar)}}" alt="image">--}}
{{--                            <span class="availability-status online"></span>--}}
{{--                        </div>--}}
{{--                        <div class="nav-profile-text">--}}
{{--                            <p class="mb-1 text-black">{{auth()->user()->name}}</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">--}}
{{--                        <a class="dropdown-item" href="#">--}}
{{--                            <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item" href="#">--}}
{{--                            <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item d-none d-lg-block full-screen-link">--}}
{{--                    <a class="nav-link">--}}
{{--                        <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#"--}}
{{--                       data-toggle="dropdown" aria-expanded="false">--}}
{{--                        <i class="mdi mdi-email-outline"></i>--}}
{{--                        <span class="count-symbol bg-warning"></span>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"--}}
{{--                         aria-labelledby="messageDropdown">--}}
{{--                        <h6 class="p-3 mb-0">Messages</h6>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item preview-item">--}}
{{--                            <div class="preview-thumbnail">--}}
{{--                                <img src="/assets/images/faces/face4.jpg" alt="image" class="profile-pic">--}}
{{--                            </div>--}}
{{--                            <div--}}
{{--                                class="preview-item-content d-flex align-items-start flex-column justify-content-center">--}}
{{--                                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a--}}
{{--                                    message</h6>--}}
{{--                                <p class="text-gray mb-0"> 1 Minutes ago </p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item preview-item">--}}
{{--                            <div class="preview-thumbnail">--}}
{{--                                <img src="/assets/images/faces/face2.jpg" alt="image" class="profile-pic">--}}
{{--                            </div>--}}
{{--                            <div--}}
{{--                                class="preview-item-content d-flex align-items-start flex-column justify-content-center">--}}
{{--                                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a--}}
{{--                                    message</h6>--}}
{{--                                <p class="text-gray mb-0"> 15 Minutes ago </p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item preview-item">--}}
{{--                            <div class="preview-thumbnail">--}}
{{--                                <img src="/assets/images/faces/face3.jpg" alt="image" class="profile-pic">--}}
{{--                            </div>--}}
{{--                            <div--}}
{{--                                class="preview-item-content d-flex align-items-start flex-column justify-content-center">--}}
{{--                                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture--}}
{{--                                    updated</h6>--}}
{{--                                <p class="text-gray mb-0"> 18 Minutes ago </p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <h6 class="p-3 mb-0 text-center">4 new messages</h6>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"--}}
{{--                       data-toggle="dropdown">--}}
{{--                        <i class="mdi mdi-bell-outline"></i>--}}
{{--                        <span class="count-symbol bg-danger"></span>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"--}}
{{--                         aria-labelledby="notificationDropdown">--}}
{{--                        <h6 class="p-3 mb-0">Notifications</h6>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item preview-item">--}}
{{--                            <div class="preview-thumbnail">--}}
{{--                                <div class="preview-icon bg-success">--}}
{{--                                    <i class="mdi mdi-calendar"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div--}}
{{--                                class="preview-item-content d-flex align-items-start flex-column justify-content-center">--}}
{{--                                <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>--}}
{{--                                <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item preview-item">--}}
{{--                            <div class="preview-thumbnail">--}}
{{--                                <div class="preview-icon bg-warning">--}}
{{--                                    <i class="mdi mdi-settings"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div--}}
{{--                                class="preview-item-content d-flex align-items-start flex-column justify-content-center">--}}
{{--                                <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>--}}
{{--                                <p class="text-gray ellipsis mb-0"> Update dashboard </p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item preview-item">--}}
{{--                            <div class="preview-thumbnail">--}}
{{--                                <div class="preview-icon bg-info">--}}
{{--                                    <i class="mdi mdi-link-variant"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div--}}
{{--                                class="preview-item-content d-flex align-items-start flex-column justify-content-center">--}}
{{--                                <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>--}}
{{--                                <p class="text-gray ellipsis mb-0"> New admin wow! </p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <h6 class="p-3 mb-0 text-center">See all notifications</h6>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item nav-logout d-none d-lg-block">--}}
{{--                    <a class="nav-link" href="#">--}}
{{--                        <i class="mdi mdi-power"></i>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item nav-settings d-none d-lg-block">--}}
{{--                    <a class="nav-link" href="#">--}}
{{--                        <i class="mdi mdi-format-line-spacing"></i>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"--}}
{{--                    data-toggle="offcanvas">--}}
{{--                <span class="mdi mdi-menu"></span>--}}
{{--            </button>--}}
{{--        </div>--}}
{{--    </nav>--}}


{{--    <!-- SIDEBAR -->--}}
{{--    <div class="container-fluid page-body-wrapper">--}}
{{--        <!-- partial:partials/_sidebar.html -->--}}
{{--        <nav class="sidebar sidebar-offcanvas" id="sidebar">--}}
{{--            <ul class="nav">--}}
{{--                <li class="nav-item nav-profile">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <div class="nav-profile-image">--}}
{{--                            <img src="{{asset('/storage/'.auth()->user()->avatar)}}" alt="profile">--}}
{{--                            <span class="login-status online"></span>--}}
{{--                            <!--change to offline or busy as needed-->--}}
{{--                        </div>--}}
{{--                        <div class="nav-profile-text d-flex flex-column">--}}
{{--                            <span class="font-weight-bold mb-2">{{auth()->user()->name}}</span>--}}
{{--                            <span class="text-secondary text-small">{{auth()->user()->email}}</span>--}}
{{--                        </div>--}}
{{--                        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="/admin">--}}
{{--                        <span class="menu-title">Dashboard</span>--}}
{{--                        <i class="mdi mdi-home menu-icon"></i>--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="/admin/articles">--}}
{{--                        <span class="menu-title"> Articles</span>--}}
{{--                        <i class="mdi mdi-library-books menu-icon"></i>--}}

{{--                    </a>--}}
{{--                </li>--}}

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="/admin/events">--}}
{{--                        <span class="menu-title"> Events</span>--}}
{{--                        <i class=" mdi mdi-rss  menu-icon"></i>--}}

{{--                    </a>--}}
{{--                </li>--}}
{{--                @can('onlyAdmin')--}}


{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="/admin/users">--}}
{{--                            <span class="menu-title">Registered Users</span>--}}
{{--                            <i class="mdi mdi-account  menu-icon"></i>--}}

{{--                        </a>--}}
{{--                    </li>--}}

{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="/admin/editors">--}}
{{--                            <span class="menu-title">Editors</span>--}}
{{--                            <i class="mdi mdi-account-check  menu-icon"></i>--}}

{{--                        </a>--}}
{{--                    </li>--}}

{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="/admin/tags">--}}
{{--                            <span class="menu-title">Tag</span>--}}
{{--                            <i class="mdi mdi-tag  menu-icon"></i>--}}

{{--                        </a>--}}
{{--                    </li>--}}
{{--                @endcan--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="/admin/create">--}}
{{--                        <span class="menu-title">Create Article</span>--}}
{{--                        <i class="mdi mdi-border-color menu-icon"></i>--}}

{{--                    </a>--}}
{{--                </li>--}}


{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="/events/create">--}}
{{--                        <span class="menu-title">Add Event</span>--}}
{{--                        <i class="mdi mdi-pen  menu-icon"></i>--}}

{{--                    </a>--}}
{{--                </li>--}}


{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="/admin/profile">--}}
{{--                        <span class="menu-title">Profile</span>--}}
{{--                        <i class="mdi mdi-account-convert  menu-icon"></i>--}}

{{--                    </a>--}}
{{--                </li>--}}

{{--                <li class="nav-item"><a href="#">--}}
{{--                        <form action="/logout" method="post">--}}
{{--                            @csrf--}}
{{--                            @method('POST')--}}

{{--                            <button role="submit">--}}
{{--                                <span class="menu-title">Logout</span>--}}
{{--                                <i class="mdi mdi-account-convert  menu-icon"></i>--}}
{{--                            </button>--}}


{{--                        </form>--}}
{{--                    </a>--}}


{{--                </li>--}}

{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">--}}
{{--                                        <span class="menu-title">Basic UI Elements</span>--}}
{{--                                        <i class="menu-arrow"></i>--}}
{{--                                        <i class="mdi mdi-crosshairs-gps menu-icon"></i>--}}
{{--                                    </a>--}}
{{--                                    <div class="collapse" id="ui-basic">--}}
{{--                                        <ul class="nav flex-column sub-menu">--}}
{{--                                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>--}}
{{--                                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="pages/icons/mdi.html">--}}
{{--                                        <span class="menu-title">Icons</span>--}}
{{--                                        <i class="mdi mdi-contacts menu-icon"></i>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="pages/forms/basic_elements.html">--}}
{{--                                        <span class="menu-title">Forms</span>--}}
{{--                                        <i class="mdi mdi-format-list-bulleted menu-icon"></i>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="pages/charts/chartjs.html">--}}
{{--                                        <span class="menu-title">Charts</span>--}}
{{--                                        <i class="mdi mdi-chart-bar menu-icon"></i>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="pages/tables/basic-table.html">--}}
{{--                                        <span class="menu-title">Tables</span>--}}
{{--                                        <i class="mdi mdi-table-large menu-icon"></i>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">--}}
{{--                                        <span class="menu-title">Sample Pages</span>--}}
{{--                                        <i class="menu-arrow"></i>--}}
{{--                                        <i class="mdi mdi-medical-bag menu-icon"></i>--}}
{{--                                    </a>--}}
{{--                                    <div class="collapse" id="general-pages">--}}
{{--                                        <ul class="nav flex-column sub-menu">--}}
{{--                                            <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>--}}
{{--                                            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>--}}
{{--                                            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>--}}
{{--                                            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>--}}
{{--                                            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item sidebar-actions">--}}
{{--                              <span class="nav-link">--}}
{{--                                <div class="border-bottom">--}}
{{--                                  <h6 class="font-weight-normal mb-3">Projects</h6>--}}
{{--                                </div>--}}
{{--                                <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>--}}
{{--                                <div class="mt-4">--}}
{{--                                  <div class="border-bottom">--}}
{{--                                    <p class="text-secondary">Categories</p>--}}
{{--                                  </div>--}}
{{--                                  <ul class="gradient-bullet-list mt-4">--}}
{{--                                    <li>Free</li>--}}
{{--                                    <li>Pro</li>--}}
{{--                                  </ul>--}}
{{--                                </div>--}}
{{--                              </span>--}}
{{--                                </li>--}}
{{--            </ul>--}}
{{--        </nav>--}}
{{--        <!-- partial -->--}}

{{--        <div class="main-panel">--}}
{{--            <div class="content-wrapper">--}}
{{--                @yield('content')--}}
{{--            </div>--}}
{{--            <!-- content-wrapper ends -->--}}
{{--            <!-- partial:partials/_footer.html -->--}}
{{--            <footer class="footer">--}}
{{--                <div class="d-sm-flex justify-content-center justify-content-sm-between">--}}
{{--                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a--}}
{{--                            href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>--}}
{{--                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i--}}
{{--                            class="mdi mdi-heart text-danger"></i></span>--}}
{{--                </div>--}}
{{--            </footer>--}}
{{--            <!-- partial -->--}}
{{--        </div>--}}
{{--        <!-- main-panel ends -->--}}
{{--    </div>--}}
{{--    <!-- page-body-wrapper ends -->--}}
{{--</div>--}}


{{--<script src="assets/vendors/js/vendor.bundle.base.js"></script>--}}
{{--<!-- endinject -->--}}
{{--<!-- Plugin js for this page -->--}}
{{--<script src="assets/vendors/chart.js/Chart.min.js"></script>--}}
{{--<!-- End plugin js for this page -->--}}
{{--<!-- inject:js -->--}}
{{--<script src="assets/js/off-canvas.js"></script>--}}
{{--<script src="assets/js/hoverable-collapse.js"></script>--}}
{{--<script src="assets/js/misc.js"></script>--}}
{{--<!-- endinject -->--}}
{{--<!-- Custom js for this page -->--}}
{{--<script src="assets/js/dashboard.js"></script>--}}
{{--<script src="assets/js/todolist.js"></script>--}}
{{--<!-- End custom js for this page -->--}}


{{--<!-- container-scroller -->--}}
{{--<!-- plugins:js -->--}}
{{--<script src="/assets/vendors/js/vendor.bundle.base.js"></script>--}}
{{--<!-- endinject -->--}}
{{--<!-- Plugin js for this page -->--}}
{{--<script src="/assets/vendors/chart.js/Chart.min.js"></script>--}}
{{--<!-- End plugin js for this page -->--}}
{{--<!-- inject:js -->--}}
{{--<script src="../../assets/js/off-canvas.js"></script>--}}
{{--<script src="../../assets/js/hoverable-collapse.js"></script>--}}
{{--<script src="../../assets/js/misc.js"></script>--}}
{{--<!-- endinject -->--}}
{{--<!-- Custom js for this page -->--}}
{{--<script src="/assets/js/dashboard.js"></script>--}}
{{--<script src="/assets/js/todolist.js"></script>--}}
{{--<!-- End custom js for this page -->--}}


{{--<script src="/../../assets/vendors/js/vendor.bundle.base.js"></script>--}}
{{--<!-- endinject -->--}}
{{--<!-- Plugin js for this page -->--}}
{{--<!-- End plugin js for this page -->--}}
{{--<!-- inject:js -->--}}
{{--<script src="{{ asset('/assets/js/off-canvas.js') }}"></script>--}}
{{--<script src="{{ asset('/assets/js/hoverable-collapse.js') }}"></script>--}}
{{--<script src="{{ asset('/assets/js/misc.js') }}"></script>--}}
{{--<script src="/../../assets/js/off-canvas.js"></script>--}}
{{--<script src="/../../assets/js/hoverable-collapse.js"></script>--}}
{{--<script src="/../../assets/js/misc.js"></script>--}}
{{--<!-- endinject -->--}}
{{--<!-- Custom js for this page -->--}}
{{--<script src="/../../assets/js/file-upload.js"></script>--}}
{{--<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>--}}
{{--<script>--}}
{{--    CKEDITOR.replace('summary-ckeditor');--}}
{{--</script>--}}
{{--<!-- End custom js for this page -->--}}
{{--</body>--}}
{{--</html>--}}
