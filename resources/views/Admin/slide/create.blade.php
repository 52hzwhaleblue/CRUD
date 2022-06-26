@extends('admin.layout')
@section('title')
Chỉnh sửa sản phẩm cấp 1
@endsection
@section('content')
<form method="post" action="{{ route('slide.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="d-flex justify-content-between">
        <div class="col-lg-8">
            <div class="card card-primary card-outline text-sm">
                <div class="card-header">
                    <h4>Ảnh Sldieshow</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="menu">Ảnh Sản Phẩm</label>
                        <input type="file" name="image" class="form-control" id="upload">
                    </div>

                    <div class="form-group">
                        <label for="menu">Tên Sản Phẩm</label>
                        <input type="text" name="name" class="form-control" placeholder="Nhập tên sản phẩm">
                    </div>

                </div>
            </div>
        </div>

    </div>


    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Thêm</button>
    </div>
    @csrf
</form>
@endsection