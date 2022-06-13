@extends('user.layout')

@section('title')
    Login
@endsection

@section('content')

<div class="container">
    <div class="grid-7 element-animation">
        <!--card-1-->
        <div class="card color-card">
            <ul>
                <li><i class="fas fa-arrow-left i-l w"></i></li>
                <li><i class="fas fa-ellipsis-v i-r w"></i></li>
                <li><i class="far fa-heart i-r w"></i></li>
            </ul>
            <img src="{{ session()->get('avatar') }}"
                alt="profile-pic" class="profile">
            <h1 class="title">{{ session()->get('name') }}</h1>
            <p class="job-title"> SENIOR PRODUCT DESIGNER</p>
            <div class="desc top">
                <p>Create usable interface and designs @GraphicSpark</p>
            </div>
            <button class="btn color-a top"> Hire me</button>

            <hr>
            <div class="container">
                <div class="content">
                    <div class="grid-2">
                        <button class="color-b circule"> <i class="fab fa-dribbble fa-2x"></i></button>
                        <h2 class="title">12.3k</h2>
                        <p class="followers">Followers</p>
                    </div>
                    <div class="grid-2">
                        <button class="color-c circule"><i class="fab fa-behance fa-2x"></i></button>
                        <h2 class="title">16k</h2>
                        <p class="followers">Followers</p>
                    </div>
                    <div class="grid-2">
                        <button class="color-d circule"><i class="fab fa-github-alt fa-2x"></i></button>
                        <h2 class="title">17.8k</h2>
                        <p class="followers">Followers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
