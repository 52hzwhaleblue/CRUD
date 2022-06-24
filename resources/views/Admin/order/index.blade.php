@extends('admin.layout')
@section('title')
Quản lý đơn hàng
@endsection
@section('content')
<div class="row">
    <div class="col-md-6 col-lg-3">
        <div class="widget-small primary coloured-icon">
            <i class="icon fa-solid fa-bag-shopping fa-3x"></i>
            <div class="info">
                <h4>Mới đặt</h4>
                <p><b>5</b></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="widget-small info coloured-icon">
            <i class="icon fa fa-thumbs-up fa-3x"></i>
            <div class="info">
                <h4>Đã xác nhận</h4>
                <p><b>25</b></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="widget-small warning coloured-icon">
            <i class="fas fa-check-circle fa-3x icon"></i>
            <div class="info">
                <h4>Đã giao</h4>
                <p><b>10</b></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="widget-small danger coloured-icon">
            <i class="icon fas fa-times-circle fa-3x"></i>
            <div class="info">
                <h4>Đã huỷ</h4>
                <p><b>500</b></p>
            </div>
        </div>
    </div>
</div>

<div class="order-wrapper">
    <div class="wrap-content">
        <div class="card">
            <div class="card-header">
                Danh sách đơn hàng
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover e-commerce-table">
                        <thead>
                            <tr>
                                <th>
                                    <div class="checkbox">
                                        <input id="checkAll" type="checkbox">
                                        <label for="checkAll" class="m-b-0"></label>
                                    </div>
                                </th>
                                <th>Mã đơn hàng</th>
                                <th>Mã khách hàng</th>
                                <th>Họ tên</th>
                                <th>Hình thức thanh toán</th>
                                <th>Tình Trạng</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $k => $v)
                            <tr>

                                <td>
                                    <div class="checkbox">
                                        <input id="checkAll" type="checkbox">
                                        <label for="checkAll" class="m-b-0"></label>
                                    </div>
                                </td>
                                <td>{{ $v->id }}</td>
                                <td>{{ $v->id_user }}</td>
                                <td>{{ $v->fullname }}</td>
                                <td>{{ $v->method }}</td>
                                <td>{{ $v->order_status }}</td>
                                <td>
                                    <a href="{{ route('ordermanagement.edit',$v->id) }}">Chỉnh sửa</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection