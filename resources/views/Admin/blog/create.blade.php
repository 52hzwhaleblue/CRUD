@extends('admin.layout')
@section('title')
Thêm blog
@endsection
@section('content')
<form method="post" action="{{ route('blog.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="d-flex justify-content-between">
        <div class="col-lg-8">
            <div class="card card-primary card-outline text-sm">
                <div class="card-header">
                    <h4>Nội dung bài viết</h4>
                </div>
                <div class="card-body">


                    <div class="form-group">
                        <label for="menu">Tên Sản Phẩm</label>
                        <input type="text" name="name" class="form-control" placeholder="Nhập tên sản phẩm">
                    </div>


                    <div class="form-group">
                        <label>Mô Tả </label>
                        <textarea name="desc" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Mô Tả Chi Tiết</label>
                        <textarea name="content" id="cke_content" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Trạng thái</label>
                        <div class="custom-control custom-radio">
                            <input type="checkbox" name="status[]" value="noibat"> Nổi bật
                            <input type="checkbox" name="status[]" value="hienthi"> Hiển thị
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-primary card-outline text-sm">
                <div class="card-header">
                    <h4>Ảnh bài viết</h4>
                </div>

                <div class="form-group">
                    <input type="file" name="image" class="form-control" id="upload">
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