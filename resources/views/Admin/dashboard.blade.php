@extends('admin.layout')

@section('content')
<div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
        <p>A free and open source Bootstrap 4 admin template</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    </ul>
</div>
<div class="row">
    <div class="col-md-6 col-lg-3">
        <div class="widget-small primary coloured-icon">
            <i class="icon fa fa-users fa-3x"></i>
            <div class="info">
                <h4>Users</h4>
                <p><b>5</b></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="widget-small info coloured-icon">
            <i class="icon fa fa-thumbs-up fa-3x"></i>
            <div class="info">
                <h4>Likes</h4>
                <p><b>25</b></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="widget-small warning coloured-icon">
            <i class="fa-solid fa-file-arrow-down fa-3x icon"></i>
            <div class="info">
                <h4>Uploades</h4>
                <p><b>10</b></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="widget-small danger coloured-icon">
            <i class="icon fa fa-star fa-3x"></i>
            <div class="info">
                <h4>Stars</h4>
                <p><b>500</b></p>
            </div>
        </div>
    </div>
</div>
<div class="thongke-wrapper">

    <h3>Thống kê đơn hàng theo doanh số</h3>
    <div class="d-flex justify-content-start align-items-center">
        <div class="col-md-2">
            <p class="mb-0">Từ ngày: <input type="text" name="" id="datepicker"> </p>
            <input type="button" id="thongke-btn" value="Lọc kết quả">
        </div>
        <div class="col-md-2">
            <p class="mb-0">Đến ngày: <input type="text" name="" id="datepicker2"> </p>
        </div>
        <select name="id_list" class="custom-select" style="max-width: 180px;">
            <option value=""> Ngày</option>
        </select>
    </div>

    <div class="col-md-12">
        <div id="thongke-chart"></div>
    </div>
</div>
</div>
@endsection