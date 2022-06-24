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
                    @foreach ($orders_status as $k =>$v )
                    <div class="paymentmethod-item">
                      
                            <input type="checkbox" value="1" id="customcb1" name="id_order_status" />{{ $v->name }}
                        
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="payment-right"></div>
    </div>
</div>

@endsection