@extends('user.layout')

@section('title')
    Chi Tiết Sản Phẩm
@endsection

@section('content')
    <div class="product-detail-wrapper">
        <div class="wrap-content">
            <div class="product-detail-left">
                <div class="fotorama" data-nav="thumbs" data-thumbwidth="98" data-thumbheight="98">
                    <img src="{{ asset('backend/assets/img/products/' .  $data[0]->photo ) }}" />
                </div>
            </div>
            <div class="product-detail-right">
                <div class="row justify-content-between">
                    <h3 class="name-product"><a href="">{{ $data[0]->name }}</a></h3> </h3>

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
                    <span class="price-sale">120.000 <sup>đ</sup></span>
                    <span class="price-current">120.000<sup>đ</sup></span>
                </div>
                <p class="blog-desc">{{ $data[0]->desc }}
                </p>

                <div class="prod-detail-btn">
                    <input id="alice" type="number" step="any" value="1">
                    <button>
                        add to cart
                    </button>
                </div>

                <div class="prod-detail-buynow">
                    buy it now
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
                        <p>Maecenas pulvinar ex a fermentum egestas. Curabitur tristique aliquam felis, a blandit nisl
                            consequat quis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                            turpis egestas. Etiam porttitor purus elit, sit amet viverra orci pretium non. Sed libero lorem,
                            eleifend at congue quis, semper eget mauris. Nunc ullamcorper cursus libero a luctus. Nunc urna
                            neque, consectetur eget viverra pretium, tempor eu ex. Donec faucibus, dui at consectetur
                            gravida, nisi diam varius metus, sit amet maximus orci eros nec felis. Ut nisi neque,
                            condimentum id magna non, sollicitudin lobortis nibh. Etiam in fermentum felis, non venenatis
                            augue. Donec quis ipsum tortor. Suspendisse tempor turpis vitae velit pharetra, ac varius ipsum
                            pharetra. Ut at metus lobortis, porta tellus at, faucibus odio. Maecenas dictum quam vulputate
                            lacus pharetra, et iaculis erat scelerisque. Nullam nec dui porta, ultricies leo nec, malesuada
                            enim.</p>
                    </div>

                    <input type="radio" id="tabsilver" name="mytabs">
                    <label for="tabsilver">ADDITIONAL INFORMATION</label>
                    <div class="tab">
                        <p>{{ $data[0]->content }}</p>
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
    <script>
        $(document).ready(function() {
            // $('#mirror').text($('#alice').val());

            $('#alice').on('input', function() {
                // $('#mirror').text($('#alice').val());
                var soluong = $('#alice').val();

                if (soluong > 4) {
                    alert("Quá số lượng tồn kho!");
                    reloadSoLuong();
                }
                $('.product-detail-quantity input').attr('value', soluong);
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
