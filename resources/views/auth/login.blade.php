@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

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


{{--    <div class="container-scroller">--}}
{{--        <div class="container-fluid page-body-wrapper full-page-wrapper">--}}
{{--            <div class="content-wrapper d-flex align-items-center auth">--}}
{{--                <div class="row flex-grow">--}}
{{--                    <div class="col-lg-4 mx-auto">--}}
{{--                        <div class="auth-form-light text-left p-5">--}}
{{--                            <div class="brand-logo">--}}
{{--                                <h3>Ovate Agro</h3>--}}
{{--                                <img src="../../assets/images/logo.svg">--}}
{{--                            </div>--}}
{{--                            <h4>Hello! let's get started</h4>--}}

{{--                            <form class="pt-3" method="POST" action="{{ route('login') }}">--}}
{{--                                @csrf--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="email" class=" col-form-label text-md-right" >{{ __('E-Mail Address') }}</label>--}}

{{--                                    <input--}}
{{--                                        type="email"--}}
{{--                                        class="form-control  @error('email') is-invalid @enderror form-control-lg"--}}
{{--                                        id="exampleInputEmail1"--}}
{{--                                        placeholder="Username"--}}
{{--                                        name="email" value="{{ old('email') }}"--}}
{{--                                        required--}}
{{--                                        autocomplete="email"--}}
{{--                                    >--}}
{{--                                    @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                <strong>{{ $message }}</strong>--}}
{{--            </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}


{{--                                <div class="form-group">--}}
{{--                                    <label for="password" class=" col-form-label text-md-right">{{ __('Password') }}</label>--}}
{{--                                    <input--}}
{{--                                        type="password"--}}
{{--                                        class="form-control form-control-lg  @error('password') is-invalid @enderror"--}}
{{--                                        id="exampleInputPassword1"--}}
{{--                                        placeholder="Password"--}}
{{--                                        name="password" required autocomplete="current-password">--}}

{{--                                    @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                <strong>{{ $message }}</strong>--}}
{{--            </span>--}}
{{--                                    @enderror--}}

{{--                                </div>--}}



{{--                                <div class="mt-3">--}}
{{--                                    <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">{{ __('Login') }}</button>--}}

{{--                                </div>--}}

{{--                                <div class="my-2 d-flex justify-content-between align-items-center">--}}
{{--                                    <div class="form-check">--}}
{{--                                        <label class="form-check-label text-muted">--}}
{{--                                            <input type="checkbox"--}}
{{--                                                   class="form-check-input"--}}
{{--                                                   name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>   {{ __('Remember Me') }}--}}

{{--                                        </label>--}}


{{--                                    </div>--}}
{{--                                    @if (Route::has('password.request'))--}}
{{--                                        <a href="{{ route('password.request') }}" class="auth-link text-black">{{ __('Forgot Your Password?') }}</a>--}}
{{--                                    @endif--}}
{{--                                </div>--}}

{{--                                --}}{{--        <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="register.html" class="text-primary">Create</a>--}}
{{--                                --}}{{--        </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- content-wrapper ends -->--}}
{{--        </div>--}}
{{--        <!-- page-body-wrapper ends -->--}}
{{--    </div>--}}



