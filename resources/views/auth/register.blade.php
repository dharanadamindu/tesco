{{--@extends('layouts.app')--}}
{{--@section('content')--}}
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/login.css">

{{--<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">--}}
<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
      integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="images/img-01.png" alt="IMG">
            </div>

            <form method="POST" class="login100-form" action="{{ route('register') }}">
                @csrf

                <span class="login100-form-title">
						Member registration
                    </span>

                <div class="wrap-input100">
                    <input id="name" type="text" placeholder="Enter your Name" class="input100 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <span class="symbol-input100">
                        <i class="fas fa-user" aria-hidden="true"></i>
                    </span>
                </div>



                <div class="wrap-input100">
                    <input id="name" type="text" placeholder="Enter your Employee number" class="input100 form-control @error('eno') is-invalid @enderror" name="eno" value="{{ old('eno') }}">
                    @error('eno')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <span class="symbol-input100">
                        <i class="fas fa-user" aria-hidden="true"></i>
                    </span>
                </div>


                <div class="wrap-input100">
                    <input id="email" type="email" placeholder="Enter your Email" class="input100 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>



                <div class="wrap-input100">
                    <input id="password" type="password" placeholder="Enter your password" class="input100 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                    <span class="symbol-input100">
                        <i class="fas fa-key" aria-hidden="true"></i>
                    </span>
                </div>


                <div class="wrap-input100">
                    <input id="password-confirm" placeholder="Re-type your password" type="password" class="input100 form-control" name="password_confirmation" required autocomplete="new-password" autofocus>
                    <span class="symbol-input100">
                        <i class="fas fa-key" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="form-group row">
                    <input id="roleid" type="hidden" class="form-control" name="roleid" value="2" required>
                </div>

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        {{ __('Register') }}
                    </button>
                </div>

                <div class="text-center p-t-13">
                    <a class="txt2" href="/">
                        Already have a account?
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('vendor/tilt/tilt.jquery.min.js') }}" defer></script>

{{--@endsection--}}
