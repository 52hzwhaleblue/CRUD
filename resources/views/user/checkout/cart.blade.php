@extends('user.layout')

@section('title')
Giỏ hàng
@endsection

@section('content')
<div class="cart-wrapper">
    <div class="wrap-content">
        <div class="cart-left">
            <div class="table-responsive">
                <table class="table table-hover e-commerce-table">
                    <thead>
                        <tr>
                            <th>
                                <div class="d-flex align-items-center">
                                    <input type="checkbox" name="">
                                    <p class="mb-0 pl-3">Tất cả</p>
                                </div>

                            </th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                            <th><i class="fa-solid fa-trash"></i></th>
                        </tr>
                    </thead>
                    <tbody id="cart-table">
                        @foreach ($carts as $key => $v)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center justify-content-between">
                                    <input class="mr-1 cart-input" type="checkbox" name=""
                                        data-tempprice="{{ $v->temp_price }}">
                                    <img src="{{ asset('backend/assets/img/products/' . $v->photo) }}" alt="profile-pic"
                                        style="width:80px;height:80px;">
                                    <span>{{ $v->name }}</span>
                                </div>
                            </td>

                            <td>
                                <div class="product-price">
                                    <span class="price-sale">
                                        <?php echo number_format($v->sale_price, 0); ?> <sup>đ</sup>
                                    </span>
                                    <span class="price-current">
                                        <?php echo number_format($v->regular_price, 0); ?><sup>đ</sup>
                                    </span>
                                </div>
                            </td>

                            <td>
                                <input class="product-detail-quantity" id="alice" type="number" name="quantity"
                                    value="{{ $v->quantity }}">
                            </td>
                            <td>
                                <span class="temp-price">
                                    <?php echo number_format($v->temp_price, 0); ?><sup>đ</sup>
                                </span>
                            </td>
                            <td><i class="fa-solid fa-trash"></i></td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
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

                <div class="tamtinh-wrapper">
                    <div class="tamtinh-title d-flex justify-content-between">
                        <span>Tạm tính</span>
                        <span class="tamtinh-price">000.000 đ</span>
                    </div>
                </div>
                <div class="tongtien-wrapper">
                    <div class="tongtien-title d-flex justify-content-between">
                        <span>Tổng tiền</span>
                        <span class="tongtien-price">000.000 đ</span>
                    </div>
                </div>
                <form action="{{ route('order.store') }}" method="post">
                    @csrf
                    <div class="muahang-btn ">
                        <input name="id_prod" type="text" value="{{ $v->id }}" hidden>
                        <input name="photo" type="text" value="{{ $v->photo }}" hidden>
                        <input name="name" type="text" value="{{ $v->name }}" hidden>
                        <input name="regular_price" type="text" value="{{ $v->regular_price }}" hidden>
                        <input name="sale_price" type="text" value="{{ $v->sale_price }}" hidden>
                        <input name="quantity" type="text" value="{{ $v->quantity }}" hidden>
                        <input name="temp_price" type="text" value="{{ $v->temp_price }}" hidden>


                        <button type="submit">mua hàng</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        // Lấy đơn giá  khi click từng checkbox
        $('.cart-input').click(function() {
            var temp_price = $(this).data('tempprice');
            var format_temp_price=(new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(temp_price));

            $('.tamtinh-wrapper').find('.tamtinh-price').text(format_temp_price);
            $('.tongtien-wrapper').find('.tongtien-price').text(format_temp_price);
        });

        // // Đặt hàng
        // $(document).ready(function() {
        //     $(".muahang-btn").click(function(){
                
        //         var id_prod = 
        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         }
        //     });
        //     $.ajax({
        //         type: 'POST',
        //         url: '/addToOrder',
        //         data: {
        //             'id_prod': 6,
        //             'photo': "sdasd",
        //             'name': "name",
        //             'regular_price': "regular_price",
        //             'sale_price': "sale_price",
        //             'quantity': "quantity",
        //             'temp_price': "temp_price",
        //         },
        //         datatype: 'JSON',
        //         success: function (response) {
        //             alert(response);
        //         },
        //         error: function (response) {
                
        //         }
        //     });
            
        //     });
        // });
    });
</script>
@endsection