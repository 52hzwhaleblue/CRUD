<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />

    <!-- googel fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Leckerli+One:regular" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200italic,300,300italic,regular,italic,600,600italic,700,700italic,900,900italic"
        rel="stylesheet" />

    {{-- Kit Front awesome --}}
    <script src="https://kit.fontawesome.com/8548ee4b2e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- jquery cdn -->

    <script src="http://demo21.ninavietnam.com.vn/thang_03/nhakhoamic_259522w/assets/js/jquery.min.js?v=8jJNPWzI80">
    </script>

    <link rel="stylesheet" href="{{ asset('frontend/assets/js/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css') }}">
    <link rel="stylesheet"
        href="{{ asset('frontend/assets/js/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css') }}">

    <script type="text/javascript" src="{{ asset('frontend/assets/js/OwlCarousel2-2.3.4/dist/owl.carousel.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}">
    </script>

    {{-- Fotorama  --}}

    <!-- Fotorama from CDNJS, 19 KB -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css"
      rel="stylesheet"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>

    <title>@yield('title')</title>
</head>

<body>
    @include('user.partials.header')

    @if ($com == 'user.index')
        @include('user.partials.slide')
    @endif

    @yield('content')

    <!--   ------------footer-------------- -->
<div class="footer">
    <div class="container">
        <div class="row-5">
            <div class="footer-col-1">
                <h3>TẢI XUỐNG ỨNG DỤNG CỦA CHÚNG TÔI</h3>
                <p>Tải xuống ứng dụng cho điện thoại di động Android và iOS..</p>
                <div class="app-logo">
                  <img src="images/play-store.png">
                  <img src="images/app-store.png">
              </div>
                 
            </div>
            <div class="footer-col-2">
                <img src="https://cdn.shopify.com/s/files/1/0563/5827/3071/files/logo.png?v=1646210955" alt="" />
                <p>Khách hàng là trọng tâm kinh doanh của chúng tôi.</p>
            </div>
            <div class="footer-col-3">
                <h3>TRANG</h3>
                <ul>
                    <li>Liên hệ</li>
                    <li>Giới thiệu</li>
                    <li>Sản phẩm</li>
                    <li>Bài viết</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>LIÊN HỆ</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>Youtube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">Copyright © 2022</p>
    </div>

</body>

{{-- JS File --}}
{{-- <script type="text/javascript" src="{{ asset('frontend/assets/js/app.js') }}"></script> --}}


<script>
    // Slider
    $(document).ready(function() {
        $(".owl-slide").owlCarousel({
            items: 1,
            loop: false,
            dots: true,
            autoplay: true,
            nav: false,
            margin: 10,
        });

        $(".owl-product").owlCarousel({
            autoplayHoverPause: false,
            items: 3,
            loop: false,
            dots: true,
            autoplay: true,
            nav: false,
            margin: 30,
            responsive: {
                0: {
                    items: 2,
                },

                600: {
                    items: 2,
                },
                1000: {
                    items: 3,
                },
            },
        });



        // $(".prev-slide").click(function () {
        //     $(".owl-slide").trigger("prev.owl.carousel");
        // });
        // $(".next-slide").click(function () {
        //     $(".owl-slide").trigger("next.owl.carousel");
        // });
    });
</script>

</html>
