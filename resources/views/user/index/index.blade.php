@extends('user.layout')

@section('title')
Trang chủ
@endsection

@section('content')
<!-- Hình ảnh danh mục câp 1 -->
<div class="slideprod-wrapper">
    <div class="wrap-content">
        <div class="owl-product owl-carousel owl-theme">
            @foreach ($splist as $k => $v)
            <div class="slideprod-item scale-img">
                <div class="slideprod-img">
                    <a href="">
                        <img width="605" height="400" src="{{ asset('backend/assets/img/products/' . $v->photo) }}"
                            alt="" />
                    </a>
                </div>
                <div class="slideprod-overlay">
                    <div class="slideprod-border">
                        <h3 class="slideprod-title"><a href="">{{ $v->name }}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>

<!-- Giới thiệu -->
<div class="gioithieu-wrapper">
    <div class="wrap-content">
        <div class="gioithieu-left">
            <div class="gioithieu-img">
                <img src="./images/gioithieu-bg.jpg" alt="" />
            </div>
        </div>
        <div class="gioithieu-right">
            <div class="gioithieu-content">
                <h2>Tea is a drink of health & beauty for you</h2>
                <p>
                    Tea has a complex positive effect on the body. Daily use of a cup
                    of tea is good for your health.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor cididunt ut labore et dolore magna aliqua. Ut enim
                    ad minim veniam, quis nostrud exercitation co laboris nisi ut
                    aliquip ex ea commodo
                </p>
                <div class="readmore-info-btn">
                    <a href="#">read more</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Khu vực sản phẩm các loại -->
<div class="product-wrapper">
    <div class="wrap-content">
        <div class="title-main">
            <h3>OUR BEST SELLER</h3>
        </div>

        <div class="producttype-wrapper">
            <div class="producttype-title" data-type="noibat,hienthi">
                <p>All</p>
            </div>
            <div class="producttype-title" data-type="noibat">
                <p>New Arrivals</p>
            </div>
            <div class="producttype-title" data-type="bestseller">
                <p>best seller</p>
            </div>
            <div class="producttype-title">
                <p>sale off</p>
            </div>
        </div>
        <!-- product items -->
        <div class="product-items prodnb-items">
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

<!-- Danh mục cấp 1 -->
@if (count($splist))
@foreach ($splist as $k => $a)
<div class="product-wrapper">
    <div class="wrap-content">
        <h3 class="title-main title-decoration">{{ $a->name }}</h3>
        <div class="subTitle">
            <p>
                We offer you the finest quality tea with ingredients hand picked
                carefully from around the world, because we know the secret to your
                good health.
            </p>
        </div>

        <!-- product items -->
        <div class="product-items">
            @foreach ($splistnb as $k => $v)
            @if ($v->id_list == $a->id)
            <div class="product-item">
                <div class="product-img scale-img">
                    <a href="">
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
                    <span class="price-sale">{{ $v->sale_price }} <sup>đ</sup></span>
                    <span class="price-current">{{ $v->regular_price }} <sup>đ</sup></span>
                </div>
            </div>
            @endif
            @endforeach
        </div>

    </div>
</div>
@endforeach

@endif


<!-- Album -->
<div class="album-wrapper">
    <div class="wrap-content">
        <h3 class="title-main title-decoration">Album</h3>
        <div class="subTitle">
            <p>
                We offer you the finest quality tea with ingredients hand picked
                carefully from around the world, because we know the secret to your
                good health.
            </p>
        </div>
        <div class="album-items">
            <div class="album-item">
                <div class="album-img">
                    <a href="">
                        <img src="{{ asset('frontend/assets/img/product-3.jpg') }}" alt="" />
                    </a>
                </div>
                <h3 class="name-product"><a href=""> Organic tea </a></h3>
                <p class="album-desc">
                    orem ipsum dolor sit amet, consectetur adipisicing elit. Qui
                    adipisci fugiat, repellat culpa.
                </p>
            </div>

        </div>
    </div>
</div>

<!-- Information Wrapper -->
<div class="info-wrapper">
    <img src="{{ asset('frontend/assets/img/info-bg2.jpg') }}" alt="" />

    <div class="wrap-content">
        <div class="info-heading">
            <p class="title">
                Want to dig deeper into what makes each tea category unique?
            </p>
            <div class="subTitle">
                <p>
                    We offer you the finest quality tea with ingredients hand picked
                    carefully from around the world, because we know the secret to
                    your good health.
                </p>
            </div>
            <div class="readmore-info-btn">
                <a href="#">read more</a>
            </div>
        </div>
    </div>
</div>

<!-- Our Blogs -->
<?php if(count($blogs)) { ?>

<div class="blog-wrapper">
    <div class="wrap-content">
        <h3 class="title-main">our blogs</h3>
        <p class="subTitle">
            We offer you the finest quality tea with ingredients hand picked
            carefully from around the world, because we know the secret to your
            good health.
        </p>
        <div class="blog-items">
            @foreach ($blogs as $v)
            <div class="blog-item">
                <div class="blog-img">
                    <a href="">
                        <img style="background:white" src="{{ asset('backend/assets/img/products/' . $v->photo) }}"
                            class="rounded" alt="{{ $v->photo }}" width="430" height="375">
                    </a>
                    <div class="blog-time">
                        <span class="blog-date">02</span>
                        <span class="blog-month">mar</span>
                    </div>
                </div>
                <p class="blog-cat">news</p>
                <h3 class="name-product">
                    <a href="">{{ $v->name }}</a>
                </h3>
                <p class="blog-desc">
                    Alishan is a region of Taiwan well known for its high mountain
                    oolong. The name might seemingly refer to a single mountain...
                </p>
                <div class="blog-btn">
                    <a href="">read more</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


<?php }?>

<div class="newsletter-wrapper">
    <div class="wrap-content">
        <div class="newsletter-left">
            <div class="newsletter-title">get update</div>
            <div class="newsletter-desc">
                Subscribe our newsletter and get discount 30% off
            </div>
        </div>
        <div class="newsletter-right">
            <div class="newsletter-email">
                <form class="validation-newsletter" novalidate method="post" action="" enctype="multipart/form-data">
                    <div class="newsletter-input">
                        <input type="email" class="form-border form-control text-sm" id="email-newsletter"
                            name="dataNewsletter[email]" placeholder="Your email address...." required>
                        <div class="invalid-feedback">Vui lòng nhập địa chỉ email</div>

                        <div class="newsletter-button">
                            <i class="fa-solid fa-paper-plane"></i>
                            <input type="hidden" class="btn btn-sm w-100" name="recaptcha_response_newsletter"
                                id="recaptchaResponseNewsletter" />
                        </div>
                        <div class="invalid-feedback">Vui lòng nhập địa chỉ email</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- video -->
<div class="video-wrapper">
    <div class="wrap-content">
        <div class="title-main">
            <h3>Shark Hưng thưởng trà</h3>
            <div class="icon">
                <img src="./images/heading-icon.png" alt="" />
            </div>
            <div class="subTitle">
                <p>
                    We offer you the finest quality tea with ingredients hand picked
                    carefully from around the world, because we know the secret to
                    your good health.
                </p>
            </div>
        </div>
        <div class="box-video">
            <iframe width="890px" height="442px" src="https://www.youtube.com/embed/ATAyHuhnZTU"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </div>
</div>


@include('user.index.popup-product')
@include('user.index.popup-contact')
<script type="text/javascript">
    $(".producttype-title").click(function() {
            var type = $(this).data("type");
            
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '/laySanPhamNoiBat',
                data: {
                    type: type,
                },
                dataType: 'json',
                success: function(data) {
                    $(".prodnb-items").html(data);
                }
            });

        })
</script>
@endsection