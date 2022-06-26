@extends('user.layout')

@section('title')
Giỏ hàng
@endsection

@section('content')
<div class="order-wrapper">
    <div class="wrap-content">
        @include('user.partials.profile-left')

        <div class="order-right">
            <h5>Đơn hàng của tôi</h5>
            <div class="mytabs">
                <input type="radio" id="order_all" name="mytabs">
                <label for="order_all">Tất cả đơn </label>
                <div class="tab">
                    <div class="order-search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="search" placeholder="Tìm đơn hàng theo Mã đơn hàng, Nhà bán hoặc Tên sản phẩm"
                            class="order-input">
                    </div>

                    <div class="card-body">
                        <div class="row align-center">
                            <i class="mr-2 fa-solid fa-truck"></i>
                            <p class="mb-0">Giao hàng thành công</p>
                        </div>

                        <div class="order-items">
                            <div class="order-item">
                                <div class="order-left">
                                    <div class="order-image"></div>
                                    <div class="order-image"></div>
                                    <div class="order-soluong"></div>
                                </div>
                                <div class="order-right"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <input type="radio" id="moidat" name="mytabs" checked>
                <label for="moidat">Mới đặt </label>
                <div class="tab">
                    <div class="order-search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="search" placeholder="Tìm đơn hàng theo Mã đơn hàng, Nhà bán hoặc Tên sản phẩm"
                            class="order-input">
                    </div>

                    <div class="card-body">
                        <div class="row align-center">
                            <i class="mr-2 fa-solid fa-truck"></i>
                        </div>

                        <div class="order-items">
                            @if(isset($orderDetails_moidat))
                            @foreach ($orderDetails_moidat as $k => $v)
                            <div class="order-item">
                                <div class="order-left">
                                    <div class="order-image">
                                        <img style="background:white"
                                            src="{{ asset('backend/assets/img/products/' . $v->photo) }}"
                                            class="rounded" alt="Ảnh" width="70" height="70">
                                    </div>
                                    <div class="order-image"></div>
                                    <div class="order-soluong"></div>
                                </div>
                                <div class="order-right"></div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>

                <input type="radio" id="choxacnhan" name="mytabs">
                <label for="choxacnhan">Đã xác nhận</label>
                <div class="tab">
                    <div class="mb-3 d-flex align-center">
                        <i class="mr-2 fa-solid fa-truck"></i>
                        <p class="mb-0">Đơn hàng của bạn đang được xử lý</p>
                    </div>
                    <div class="order-items">
                        @if(isset($orderDetails_xacnhan))
                            @foreach ($orderDetails_xacnhan as $k => $v)
                            <div class="mb-5 order-item">
                                <div class="order-left d-flex">
                                    <div class="order-image mr-3">
                                        <img style="background:white"
                                            src="{{ asset('backend/assets/img/products/' . $v->photo) }}" class="rounded"
                                            alt="Ảnh" width="110" height="110">
                                    </div>
                                    <div class="w-100 d-flex justify-content-between">
                                        <div class="d-flex flex-column">
                                            <h3 class="name-product">{{ $v->name }}</h3>
                                            <p class="product-price"><span>Số lượng: x{{ $v->quantity }}</span></p>
                                        </div>

                                        <p class="product-price"> <span><?php echo number_format($v->sale_price, 0); ?> <sup>đ</sup></span></p>
                                    </div>

                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>

                <input type="radio" id="danggiaohang" name="mytabs">
                <label for="danggiaohang">Đang giao hàng</label>
                <div class="tab">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>

                <input type="radio" id="dagiao" name="mytabs">
                <label for="dagiao">Đã giao</label>
                <div class="tab">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>

                <input type="radio" id="dahuy" name="mytabs">
                <label for="dahuy">Đã hủy</label>
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