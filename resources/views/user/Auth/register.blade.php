@extends('user.layout')

@section('title')
Register
@endsection

@section('content')
<div class="popup-login">
    <div class="logo">
        <img src="https://cdn.shopify.com/s/files/1/0563/5827/3071/files/logo.png?v=1646210955" alt="" />
    </div>
    <h3>Register</h3>
    @auth
    <div class="d-flex justify-content-center">
        <img src="{{ auth()->user()->avatar }}" alt="profile-pic" style="border-radius:50%; width:50px;height:50px;">
    </div>
    @endauth
    <form action="{{ route('auth.registering') }}" method="post">
        @csrf
        @auth

        <input class="form-control" type="text" placeholder="Username" disabled value="{{ auth()->user()->name }}">
        <input class="form-control" type="email" placeholder="Email" disabled value="{{ auth()->user()->email }}">
        @endauth

        @guest
        <input name='name' type="text" placeholder="Name" required>
        <span class="text-danger">@error('name') {{ $message }} @enderror </span>
        <input name='email' type="email" placeholder="Email" required>
        <span class="text-danger">@error('email') {{ $message }} @enderror </span>
        @endguest

        <input name="password" type="password" placeholder="Password" required>
        <span class="text-danger">@error('password') {{ $message }} @enderror </span>
        <button type="submit" class="btn3">Register</button>
    </form>
    <div class="box-register">
        <span class="or-register mr-2"><a href="{{ route('user.login') }}">Back to login</a></span>
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