@extends('user.layout')

@section('title')
Trang chủ
@endsection

@section('content')
<div class="container mt-4">
    <h2>Contact Us</h2>
    <form action="{{route('send.email')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Your Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter your name">
                </div>
            </div>
            <div class="col-md-6">
                <label for="email">Email Address:</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email">
            </div>
            <div class="form-group my-2">
                <label for="message">Your message:</label>
                <textarea name="message" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <input type="submit" value="Send Message" class="btn btn-primary">
        </div>
    </form>
</div>
@endsection