@extends('admin.layout')
@section('title')
    Chỉnh sửa sản phẩm cấp 2
@endsection
@section('content')
    <form method="post" action="{{ route('slide.update', $each) }} " enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label hidden="" for="menu">ID</label>
                <input hidden id="menu" type="text" name="id" value="{{ $each->id }}" class="form-control" id="upload">
            </div>
            <div class="form-group">
                <label for="menu">Ảnh Sản Phẩm</label>
                <input type="file" name="image" value="{{ $each->photo }}" class="form-control" id="upload">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="menu">Tên Sản Phẩm</label>
                        <input type="text" name="name" value="{{ $each->name }}" class="form-control"
                            placeholder="Nhập tên sản phẩm">
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Lưu</button>
        </div>
        @csrf
    </form>
@endsection
