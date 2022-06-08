@extends('admin.layout')
@section('title')
    Chỉnh sửa sản phẩm cấp 1
@endsection
@section('content')
<form action="{{ route('news.store') }}" method="POST">
    <div class="card-body">
        <div class="form-group">
            <label for="menu">Ảnh Sản Phẩm</label>
            <input type="file"  class="form-control" name="image">
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="menu">Tên Sản Phẩm</label>
                    <input type="text" name="name" class="form-control"  placeholder="Nhập tên sản phẩm">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>Mô Tả </label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label>Mô Tả Chi Tiết</label>
            <textarea name="content" id="content" class="form-control"></textarea>
        </div>

          <div class="form-group">
            <label>Kích Hoạt</label>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="1" type="radio" id="active" name="active" checked="">
                <label for="active" class="custom-control-label">Có</label>
            </div>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="0" type="radio" id="no_active" name="active" >
                <label for="no_active" class="custom-control-label">Không</label>
            </div>
        </div> 
        <div class="form-group">
            <label>Ngày tạo<object data="" type=""></object></label>
            <textarea name="content" id="content" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Loại<object data="" type=""></object></label>
            <textarea name="content" id="content" class="form-control"></textarea>
        </div>
    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Thêm Sản Phẩm</button>
    </div>
    @csrf
</form>
@endsection
