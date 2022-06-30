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
            <div class="col-sm-5">
                <form {{-- action="{{route(/timkiem)}}" method="POST" --}}>
                    {{csrf_field()}}
                    <div class="search_box">
                         <input type="text" name="keywords_submit" id="keyword" placeholder="Tìm kiếm sản phẩm">
                         <input type="submit" style="margin-top:0; color:#666" name="search_items" {{-- class="btn btn-primary btn-sm" --}} value="Tìm kiếm">
                    </div>
                </form>
            </div>
            <!-- product items -->
            <div class="product-items">
               {{--  @for ( $i = 0; $i <=7; $i++)
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
                @endfor  --}}
                @foreach ($sanpham as $k => $v)
                <div class="product-item">
                    <div class="product-img scale-img">
                        <a href="{{ route('user.product_detail', $v->id) }}">
                            <img src="{{ asset('backend/assets/img/products/' . $v->photo) }}" alt="" />
                        </a>
    
                        <div class="product-modal">
                            <div class="modal-cart">
                                <i class="fa-solid fa-bag-shopping"></i>
                            </div>
                            <div class="modal-quickview" data-popupid="{{ $v->id }}">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                            <div class="modal-wishlist">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                        </div>
                    </div>
                    <h3 class="name-product"><a href=""> {{ $v->name }} </a></h3>
                    <div class="product-price">
                        <span class="price-sale">{{ $v->regular_price }} <sup>đ</sup></span>
                        <span class="price-current">{{ $v->sale_price }} <sup>đ</sup></span>
                    </div>
                </div>
                @endforeach
                
                
            </div>
        </div>
    </div>
@endsection
