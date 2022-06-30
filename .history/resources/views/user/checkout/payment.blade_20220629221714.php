@extends('user.layout')

@section('title')
Thanh toán
@endsection

@section('content')
<div class="payment-wrapper">
    <div class="wrap-content">
        <div class="payment-left">
            <div class="paymentmethod-wrapper">
                <h3 class="payment-title">Chọn hình thức thanh toán</h3>
                <div class="paymentmethod-items">
                    @foreach ($payment_methods as $k =>$v )
                    <div class="paymentmethod-item">

                        <input type="radio" value="{{ $v->id }}" id="customcb1" name="id_order_status" />
                        <img style="width: 32" ; height="32" src="{{ $v->photo }}" alt="">
                        {{ $v->name }}
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="payment-items">
                @foreach ($carts as $key => $v)
                <div class="payment-item">
                    <div class="payment-image mr-3">
                        <img src="{{ asset('backend/assets/img/products/' . $v->photo) }}" alt="{{ $v->name }}"
                            style="width:80px;height:80px;">
                    </div>
                    <div class=" w-100 payment-content">
                        <h3 class=""> {{ $v->name }} </h3>
                        <div class="d-flex justify-content-between">
                            <p class="payment-quantity">SL: x{{ $v->quantity }}</p>
                            <p class="payment-price">
                                <?php echo number_format($v->sale_price, 0); ?> <sup>đ</sup>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="cart-right">
            <div class="diachi-wrapper">
                <div class="diachi-title d-flex justify-content-between">
                    <span>Giao tới</span>
                    <span>Thay đổi</span>
                </div>
                <div class="diachi-content">
                    <div class="d-flex justify-content-between">
                        <span><strong>{{ auth()->user()->name }}</strong></span> |
                        <span>{{ auth()->user()->phone }}</span>
                    </div>
                    <p>
                        {{ auth()->user()->address }}
                    </p>
                </div>
                <div class="tongtien-wrapper">
                    <div class="tongtien-title d-flex justify-content-between">
                        <span>Tổng tiền</span>
                        <p class="tongtien-price">
                            <?php echo number_format($total, 0); ?> <sup>đ</sup>
                        </p>
                    </div>
                </div>
                <form action="{{ route('order.index') }}" method="get">
                    @csrf
                    <div class="muahang-btn ">
                        <input name="id_prod" type="text" value="{{ $v->id }}" hidden>
                        <input name="photo" type="text" value="{{ $v->photo }}" hidden>
                        <input name="name" type="text" value="{{ $v->name }}" hidden>
                        <input name="regular_price" type="text" value="{{ $v->regular_price }}" hidden>
                        <input name="sale_price" type="text" value="{{ $v->sale_price }}" hidden>
                        <input name="quantity" type="text" value="{{ $v->quantity }}" hidden>
                        <input name="temp_price" type="text" value="{{ $v->temp_price }}" hidden>


                        <button type="submit">Đặt hàng</button>
                    </div>
                </form>

                <form action="{{ route('momo_payment') }}" method="post">
                    @csrf
                    <div class="muahang-btn ">
                        <input name="id_prod" type="text" value="{{ $v->id }}" hidden>
                        <input name="photo" type="text" value="{{ $v->photo }}" hidden>
                        <input name="name" type="text" value="{{ $v->name }}" hidden>
                        <input name="regular_price" type="text" value="{{ $v->regular_price }}" hidden>
                        <input name="sale_price" type="text" value="{{ $v->sale_price }}" hidden>
                        <input name="quantity" type="text" value="{{ $v->quantity }}" hidden>
                        <input name="temp_price" type="text" value="{{ $v->temp_price }}" hidden>


                        <input name="total_momo" type="text" value="{{ $total}}" hidden>


                        <button type="submit" name="payUrl">Thanh Toán MOMO</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection