@extends('user.layout')

@section('title')
    Products
@endsection

@section('content')

    <div class="product-wrapper">
        <div class="wrap-content">
            <h3 class="title-main title-decoration">All Products</h1></h3>
            <div class="subTitle">
                <p>
                    We offer you the finest quality tea with ingredients hand picked
                    carefully from around the world, because we know the secret to your
                    good health.
                </p>
            </div>

            <!-- product items -->
            <div class="product-items">
                @for ( $i = 0; $i <=5; $i++)
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
@endsection
