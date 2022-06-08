@extends('admin.layout')
@section('title')
    Chỉnh sửa sản phẩm cấp 2
@endsection
@section('content')
<form method="post" action="{{ route('news.update', $each) }} "  enctype="multipart/form-data" >
    @csrf
    @method('PUT')
    <div class="card-body">
        <div class="form-group">
            <label for="menu">Ảnh Sản Phẩm</label>
            <input type="file" name="image" class="form-control" id="upload">
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="menu">Tên Sản Phẩm</label>
                    <input type="text" name="name" value="{{ $each->name }}" class="form-control"  placeholder="Nhập tên sản phẩm">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>Mô Tả </label>
            <textarea name="desc" class="form-control">{{ $each->description }}</textarea>
        </div>

        <div class="form-group">
            <label>Mô Tả Chi Tiết</label>
            <textarea name="content" id="content" class="form-control">{{ $menu->content }}</textarea>
        </div>

          <div class="form-group">
            <label>Trạng thái</label>
            <div class="custom-control custom-radio">
                <input type="checkbox" name="status[]" value="noibat"> Nổi bật
                <input type="checkbox" name="status[]" value="hienthi"> Hiển thị             
            </div>
        </div> 
    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Thêm Sản Phẩm</button>
    </div>
    @csrf
</form>

@endsection