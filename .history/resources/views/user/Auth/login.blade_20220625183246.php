@extends('user.layout')

@section('title')
    Login
@endsection

@section('content')
    <div class="popup-login">
        <div class="logo">
            <img src="https://cdn.shopify.com/s/files/1/0563/5827/3071/files/logo.png?v=1646210955" alt="" />
        </div>
        <h3 style="font-family:SofiaPro; font-weight: 100; font-size:20px; padding-top:20px;">Great to have you back!</h3>
        <form id="LoginForm">
                <input type="text" placeholder="Name" class="form-control">
                <input type="password" placeholder="Password" class="form-control">
                <button type="submit" class="btn3">Login</button>
                <a href="">Forgot password</a>
            </form>
            <div class="box-register">
                <span class="or-register mr-2">Don’t have an account?</span>
                <a href="{{ route('user.register') }}" class="jsCreate_account">Register now <i class="ml-2 ti-arrow-right"></i></a>
            </div>
            <ul class="social-login row">
                    <li class="">
                        <a href="{{ route('auth.redirect', 'gitlab') }}">
                            <i class="fa-brands fa-gitlab"></i>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{  route('auth.redirect', 'facebook')  }}">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                    </li>

                    <li class="">
                        <a href="{{  route('auth.redirect', 'google')  }}">
                            <i class="fa-brands fa-google"></i>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ route('auth.redirect', 'github') }}">
                            <i class="fa-brands fa-github"></i>
                        </a>
                    </li>
                </ul>
    </div>
    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("Indicator");

        function login() {
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
            Indicator.style.transform = "translateX(0px)";
        }

        function register() {
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(100px)";
        }
    </script>
@endsection
