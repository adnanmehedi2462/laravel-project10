@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Only For Adnan Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="{{URL::asset('public/login/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/login/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/login/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/login/vendor/animate/animate.css')}}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{asset('public/login/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/login/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/login/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{asset('public/login/vendor/daterangepicker')}}/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/login/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/login/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100" style="background-color:">
            <div class="wrap-login100" style="box-shadow: 5px 17px 20px 20px #ccc;">
                <form class="login100-form validate-form" action="{{ route('login') }}" method="POST">
                    @csrf
                    <span class="login100-form-title p-b-26">
                        Welcome Adnan
                    </span>
                    <span class="login100-form-title p-b-48">
                       <img src="{{URL::asset('public/home/images/ado.jpg')}}" style="height: 120px;width: 120px;background-size: cover;background-position: center center; border-radius: 100px;">
                    </span>


                    <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c" @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif >
                        <input id="email" class="input100 {{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="email" value="{{ old('email') }}" autofocus>

                         
                        
                        <span class="focus-input100" data-placeholder="Email">
                            
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password"   @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif>
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input id="password" class="input100 {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password">
                        
                        <span class="focus-input100" data-placeholder="Password">
                           
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script src="{{asset('public/login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('public/login/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('public/login/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('public/login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('public/login/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('public/login/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('public/login/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('public/login/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('public/login/js/main.js')}}"></script>

</body>
</html>
@endsection