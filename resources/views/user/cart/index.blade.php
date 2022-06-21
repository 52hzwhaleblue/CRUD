@extends('user.layout')

@section('title')
Giỏ hàng
@endsection

@section('content')
<div class="cart-wrapper">
    <div class="wrap-content">
        @include('user.partials.profile-left')

        <div class="cart-right">
            <h5>Đơn hàng của tôi</h5>
            <div class="mytabs">
                <input type="radio" id="cart_all" name="mytabs" checked="checked">
                <label for="cart_all">Tất cả đơn </label>
                <div class="tab">
                    <div class="cart-search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="search" placeholder="Tìm đơn hàng theo Mã đơn hàng, Nhà bán hoặc Tên sản phẩm" class="cart-input">
                    </div>

                    <div class="card-body">
                        <div class="row align-center">
                            <i class="mr-2 fa-solid fa-truck"></i>
                            <p class="mb-0">Giao hàng thành công</p>
                        </div>

                        <div class="cart-items">
                            <div class="cart-item">
                                <div class="cart-left">
                                    <div class="cart-image"></div>
                                    <div class="cart-image"></div>
                                    <div class="cart-soluong"></div>
                                </div>
                                <div class="cart-right"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <input type="radio" id="cart_payment" name="mytabs">
                <label for="cart_payment">Chờ thanh toán</label>
                <div class="tab">
                    dasdsad
                </div>

                <input type="radio" id="cart_processing" name="mytabs">
                <label for="cart_processing">Đang xử lý</label>
                <div class="tab">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>

                <input type="radio" id="cart_delivering" name="mytabs">
                <label for="cart_delivering">Đang vận chuyển</label>
                <div class="tab">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>

                <input type="radio" id="cart_delivered" name="mytabs">
                <label for="cart_delivered">Đã giao</label>
                <div class="tab">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>

                <input type="radio" id="cart_cancled" name="mytabs">
                <label for="cart_cancled">Đã hủy</label>
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
@endsection