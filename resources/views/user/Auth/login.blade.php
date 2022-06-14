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
                        <a href="">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ route('auth.redirect', 'github') }}">
                            <i class="fa-brands fa-github"></i>
                        </a>
                    </li>
                </ul>
    </div>
    {{-- <div class="account-page">
        <div class="container">
            <div class="row3">
                <div class="col-6">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator">
                        </div>
                        <form id="LoginForm">
                            <input type="text" placeholder="Username">
                            <input type="password" placeholder="Password">
                            <button type="submit" class="btn3">Login</button>
                            <a href="">Forgot password</a>

                            <ul class="social-login row">
                                <li class="">
                                    <a href="">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="{{ route('auth.redirect', 'github') }}">
                                        <i class="fa-brands fa-github"></i>
                                    </a>
                                </li>
                            </ul>
                        </form>

                        <form id="RegForm" action="{{ route('user.registering') }}" method="post">
                            @csrf
                            @auth
                                <img src="{{ auth()->user()->avatar }}" alt="profile-pic"
                                    style="border-radius:50%; width:50px;height:50px;">
                                <input type="text" placeholder="Username" disabled value="{{ auth()->user()->name }}">
                                <input type="email" placeholder="Email" disabled value="{{ auth()->user()->email }}">
                            @endauth

                            @guest
                                <input type="text" placeholder="Username" required name="name">
                                <input type="email" placeholder="Email" required name="email">
                            @endguest

                            <input type=" password" placeholder="Password">
                            <button type="submit" class="btn3">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

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
