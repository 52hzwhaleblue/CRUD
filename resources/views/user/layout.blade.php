<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />

    <!-- googel fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Leckerli+One:regular" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200italic,300,300italic,regular,italic,600,600italic,700,700italic,900,900italic" rel="stylesheet" />

    {{-- Kit Front awesome --}}
    <script src="https://kit.fontawesome.com/8548ee4b2e.js" crossorigin="anonymous"></script>

    <!-- cdn -->
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

    <title>@yield('title')</title>
</head>

<body>
    @include('user.partials.header')

    @if ($com != 'user.products' && $com != 'user.login')
        @include('user.partials.slide')
    @endif

    @yield('content')

</body>

{{-- JS File --}}
<script type="text/javascript" src="{{ asset('frontend/assets/js/app.js') }}"></script>

<script>
    $(document).ready(function() {
        $(".owl-slide").owlCarousel({
            items: 1,
            loop: false,
            dots: true,
            autoplay: true,
            nav: false,
            margin: 10,
        });

        $(".prev-slide").click(function() {
            $(".owl-slide").trigger("prev.owl.carousel");
        });
        $(".next-slide").click(function() {
            $(".owl-slide").trigger("next.owl.carousel");
        });
    });
</script>

</html>
