@extends('user.layout')

@section('title')
    Login
@endsection

@section('content')
<div class="account-page">
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

                    <form id="RegForm">
                        <input type="text" placeholder="Username">
                        <input type="email" placeholder="Email">
                        <input type="password" placeholder="Password">
                        <button type="submit" class="btn3">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
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