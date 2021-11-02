<html>
<head>
    <link rel="stylesheet" href="/website/css/style.css">
    <title>Ovate Agro</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
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

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.11/dist/css/uikit.min.css"/>

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.11/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.11/dist/js/uikit-icons.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/website/css/flaticon.css ">
    <link rel="stylesheet" href="/website/css/icomoon.css">
    <link rel="stylesheet" href="/website/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body >


<!-- <div class="login_body">
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form class="login_form" method="POST" action="{{ route('register') }}">
                @csrf
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fas fa-user-alt"></i></a>
                    <a href="#" class="social"><i class="fas fa-seedling"></i></a>
                    <a href="#" class="social"><i class="fas fa-sign-in-alt"></i></a>
                </div>
                <span>Be a Family of Ovate Agro</span>


                <input type="text" placeholder="Name" id="name"
                       class=" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required
                       autocomplete="name" autofocus/>
                @error('name')
                <span class="invalid-feedback" role="alert" style="display: block">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror




                <input id="email" placeholder="Email" type="email" class=" @error('email') is-invalid @enderror"
                       name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert" style="display: block">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror





                <input id="phone" type="text" placeholder="Phone Number"
                       class=" @error('phone') is-invalid @enderror"
                       name="phone" value="{{ old('phone') }}" autocomplete="phone" autofocus required>

                @error('phone')
                <span class="invalid-feedback" role="alert" style="display: block">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror



                <input id="password" type="password" class=" @error('password') is-invalid @enderror"
                       name="password" required autocomplete="new-password" placeholder="Password" required>

                @error('password')
                <span class="invalid-feedback" role="alert" style="display: block">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <input id="password-confirm" type="password" placeholder="Confirm Password" name="password_confirmation"
                       required autocomplete="new-password">



                <button class="login_button">Sign Up</button>
            </form>
        </div>

        <div class="form-container sign-in-container">
            <form class="login_form" method="POST" action="{{ route('login') }}">
                @csrf
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fas fa-user-alt"></i></a>
                    <a href="#" class="social"><i class="fas fa-seedling"></i></a>
                    <a href="#" class="social"><i class="fas fa-sign-in-alt"></i></a>
                </div>
                <span>Welcome back</span>


                <input type="email" placeholder="Email" id="email"
                       class="  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required
                       autocomplete="email" autofocus/>

                @error('email')
                <span class="invalid-feedback" role="alert" style="display: block" >
                   <p> <strong>{{ $message }}</strong></p>
                </span>
                @enderror


                <input type="password" placeholder="Password"
                       id="password"
                       class=" @error('password') is-invalid @enderror" name="password" required
                       autocomplete="current-password"/>

                @error('password')
                <span class="invalid-feedback" role="alert" style="display: block">
                                        <strong><p>{{ $message }}</p></strong>
                                    </span>
                @enderror

                <div class="d-flex">
                    <div class="d-flex justify-content-around" style="margin-right:10px;">
                        <input style="padding: 0; margin: 0; " type="checkbox" name="remember"
                               id="remember" {{ old('remember') ? 'checked' : '' }} required>
                    </div>
                    <label for="" style="font-size: 12px">Remember me </label>
                </div>


                <button class="login_button">Sign In</button>


                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif


            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay1">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="login_button ghost " id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Welcome to Ovate Agro</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="login_button ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
</div> -->


@extends('layouts.app')

@section('content')

    <div class="container mobile_login">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-add">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control
                                         @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input"  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} >

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button class="login_button" type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button class=login_button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection





<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');
    const overLayLeft = document.querySelector('.overlay-right');
    

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
        // overLayLeft.style.opacity= "translateX(-200%)"
       
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
        container.classList.add("left-panel-active");
    });

</script>
</body>

</html>









