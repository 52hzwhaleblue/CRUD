@extends('user.layout')

@section('title')
    Chi Tiết Sản Phẩm
@endsection

@section('content')
    <div class="product-detail-wrapper">
        <div class="wrap-content">
            <div class="product-detail-left">
                <div class="fotorama" data-nav="thumbs">
                    <img src="https://s.fotorama.io/1.jpg" />
                    <img src="https://s.fotorama.io/2.jpg" />
                    <img src="https://s.fotorama.io/2.jpg" />
                    <img src="https://s.fotorama.io/2.jpg" />
                    <img src="https://s.fotorama.io/2.jpg" />
                    <img src="https://s.fotorama.io/2.jpg" />
                    <img src="https://s.fotorama.io/2.jpg" />
                    <img src="https://s.fotorama.io/2.jpg" />
                    <img src="https://s.fotorama.io/2.jpg" />
                    <img src="https://s.fotorama.io/2.jpg" />
                </div>
            </div>
            <div class="product-detail-right">
                <div class="row justify-content-between">
                <h3 class="name-product"><a href="">Tea Plus</a> </h3>

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
            </div>
        </div>
    </div>
@endsection
