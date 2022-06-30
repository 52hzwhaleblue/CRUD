@extends('user.layout')
@section('title')
Chi Tiết Sản Phẩm
@endsection

@section('content')
<div class="product-detail-wrapper">
    <div class="wrap-content">
        <div class="product-detail-left">
            <div class="fotorama" data-nav="thumbs" data-thumbwidth="98" data-thumbheight="98">
                <img src="{{ asset('backend/assets/img/products/' . $data[0]->photo) }}" />
                @foreach ($prod_details as $k => $v)
                <img src="{{ asset('backend/assets/img/products/' . $v->photo) }}" />
                @endforeach
            </div>
            <form action="{{URL::to('/timkiem')}}">
        </div>
        <div class="product-detail-right">
            <div class="row justify-content-between">
                <h3 class="name-product"><a href="">{{ $data[0]->name }}</a></h3>
                </h3>

                <div class="wishlist-btn">
                    <div class="icon">
                        <div class="tooltip">Add to wishlist</div>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20">
                                <path
                                    d="M10 16.792 9.125 15.979Q6.062 13.021 4.073 10.958Q2.083 8.896 2.083 6.646Q2.083 4.917 3.292 3.719Q4.5 2.521 6.25 2.521Q7.25 2.521 8.219 3.01Q9.188 3.5 10 4.562Q10.792 3.5 11.76 3.01Q12.729 2.521 13.729 2.521Q15.479 2.521 16.698 3.719Q17.917 4.917 17.917 6.646Q17.917 8.896 15.917 10.958Q13.917 13.021 10.854 15.979ZM10 9.417Q10 9.417 10 9.417Q10 9.417 10 9.417Q10 9.417 10 9.417Q10 9.417 10 9.417Q10 9.417 10 9.417Q10 9.417 10 9.417Q10 9.417 10 9.417Q10 9.417 10 9.417Q10 9.417 10 9.417Q10 9.417 10 9.417Q10 9.417 10 9.417Q10 9.417 10 9.417ZM10 15.125Q12.979 12.438 14.844 10.469Q16.708 8.5 16.708 6.646Q16.708 5.354 15.865 4.542Q15.021 3.729 13.729 3.729Q12.771 3.729 11.948 4.292Q11.125 4.854 10.604 5.875H9.417Q8.896 4.854 8.052 4.292Q7.208 3.729 6.25 3.729Q4.958 3.729 4.125 4.542Q3.292 5.354 3.292 6.646Q3.292 8.5 5.146 10.469Q7 12.438 10 15.125Z">
                                </path>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
            <div class="product-price">
                <span class="price-sale">{{ $data[0]->sale_price }} <sup>đ</sup></span>
                <span class="price-current">{{ $data[0]->regular_price }}<sup>đ</sup></span>
            </div>
            <p class="blog-desc">{{ $data[0]->desc }}</p>
            <p class="sltk" data-sltk="{{ $data[0]->stock }}">Sản phẩm còn lại: {{ $data[0]->stock }}</p>

            <form action="{{ route('checkout.cart.store') }}" method="post">
                @csrf
                <div class="prod-detail-btn ">
                    <input class="product-detail-quantity" id="alice" type="number" name="quantity" value="1" min="0">

                    <input  name="id_prod" type="text"  value="{{ $data[0]->id }}" hidden>
                    <input  name="photo" type="text"  value="{{ $data[0]->photo }}" hidden>
                    <input  name="name" type="text"  value="{{ $data[0]->name }}" hidden>
                    <input  name="regular_price" type="text"  value="{{ $data[0]->regular_price }}" hidden>
                    <input  name="sale_price" type="text"  value="{{ $data[0]->sale_price }}" hidden>


                    <button type="submit">add to cart</button>
                </div>
            </form>
            <div class="prod-detail-buynow">
                <a href="">buy iyt now</a>
            </div>

        </div>
    </div>
</div>

{{-- Thông tin sản phẩm --}}
<div class="product-detail-content">
    <div class="content-body">
        <div class="wrap-content">
            <div class="mytabs">
                <input type="radio" id="tabfree" name="mytabs" checked="checked">
                <label for="tabfree">DESCRIPTION </label>
                <div class="tab">
                    <p>
                        {{ $data[0]->desc }}
                    </p>
                </div>

                <input type="radio" id="tabsilver" name="mytabs">
                <label for="tabsilver">ADDITIONAL INFORMATION</label>
                <div class="tab">
                    <?php
                        $str = $data[0]->content;
                        echo htmlspecialchars_decode($str);
                        ?>
                </div>

                <input type="radio" id="tabgold" name="mytabs">
                <label for="tabgold">REVIEWS</label>
                <div class="tab">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>

            </div>
        </div>
    </div>
</div>
{{-- <script type="text/javascript">
    $(document).ready(function() {
                    // Thêm vào giỏ hàng
                    $(".addToCart").click(function() {
                
                        var id_user = $('.profile-id').data('userid');
                        var email = $('.profile-email').data('useremail');
                        var fullname = $('.profile-name').data('username');
                        alert(fullname);
                        $.ajaxSetup({
                            headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            type: 'post',
                            url: '/addToCart',
                            data: {
                                id_user: id_user,
                                email: email,
                                fullname: fullname,
                            },
                        dataType: 'json',
                        });
        
                        })
                });
</script> --}}

<script>
    $(document).ready(function() {
            // $('#mirror').text($('#alice').val());

            $('#alice').on('input', function() {
                // $('#mirror').text($('#alice').val());
                var soluong = $('#alice').val();
                var sltk = $('.sltk').data('sltk');

                if (soluong > sltk) {
                    alert("Quá số lượng tồn kho!");
                    reloadSoLuong();
                }
                $('.product-detail-quantity').attr('value', soluong);
            })

            function reloadSoLuong() {
                var soluong = 1;

                // get a ref to your element and assign value
                var elem = document.getElementById("alice");
                elem.value = soluong;
            }
        });
</script>
@endsection