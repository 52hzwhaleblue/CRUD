@extends('user.layout')

@section('title')
    Shop Page
@endsection

@section('content')
    <div class="shoppage-wrapper">
        <div class="wrap-content">
            <!-- filter by price -->
            <div class="shoppage-left">
                <div class="box-price-filter">
                    <h4>filter by price</h4>
                    <div class="price-range-bar">
                        <form class="multi-range-field my-5 pb-5">
                            <input id="multi3" class="multi-range" type="range" />
                        </form>

                        <div class="price-range">
                            <span>Price</span>
                            <span> $30 </span> -
                            <span> $50 </span>
                        </div>

                        <div class="filter-btn">
                            <p>filter</p>
                        </div>
                    </div>
                </div>
                <div class="catory-wrapper">
                    <div class="box-catory">
                        <h2>Categories</h2>
                    </div>
                    <div class="category">
                        <ul>
                            @for ($i = 1; $i <= 5; $i++)
                                <li><a href="" class="btn1">Green Tea</a></li>
                            @endfor
                        </ul>
                    </div>
                    <div class="box-catory">
                        <h2>Tags</h2>
                    </div>
                    <div class="category1">
                        <ul clas="list">
                            @for ($i = 1; $i <= 6; $i++)
                                <li><a href="" class="btn">Green Tea</a></li>
                            @endfor

                        </ul>
                    </div>
                    <div class="box-catory">
                        <h2>Lastest Products</h2>
                    </div>
                    @for ($i = 1; $i <= 6; $i++)
                        <div class="last-product">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{ asset('frontend/assets/img/product-1.jpg') }}" />
                                </div>
                                <div class="col-2">
                                    <a href="" class="btn2">Tea is the drink in the world. </a>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="shoppage-right">
                <!-- product items -->
                <div class="product-items">
                    @for ($i = 1; $i <= 5; $i++)
                        <div class="product-item">
                            <div class="product-img scale-img">
                                <a href="">
                                    <img src="{{ asset('frontend/assets/img/1.png') }}" alt="" />
                                </a>

                                <div class="product-modal">
                                    <div class="modal-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </div>
                                    <div class="modal-quickview">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </div>
                                    <div class="modal-wishlist">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                </div>
                            </div>
                            <h3 class="name-product"><a href=""> Organic tea </a></h3>
                            <div class="product-price">
                                <span class="price-sale">250.000 <sup>đ</sup></span>
                                <span class="price-current">500.000 <sup>đ</sup></span>
                            </div>
                        </div>
                    @endfor

                </div>

            </div>

        </div>
    </div>
@endsection
