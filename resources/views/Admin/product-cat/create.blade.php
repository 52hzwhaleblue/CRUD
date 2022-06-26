@extends('admin.layout')
@section('title')
Thêm sản phẩm cấp 2
@endsection
@section('content')
<form method="post" action="{{ route('product_cat.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="d-flex justify-content-between">
        <div class="col-lg-8">
            <div class="card card-primary card-outline text-sm">
                <div class="card-header">
                    <h4>Nội dung sản phẩm</h4>
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
                    <h4>Danh mục cấp 1</h4>
                </div>

                <div class="card-body">
                    <div class="d-md-flex">
                        <div class="m-b-10 m-r-15">
                            <select name="id_list" class="custom-select" style="min-width: 180px;">
                                @foreach ($splist as $k => $v)
                                <option value="{{ $v->id }}"> {{ $v->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-primary card-outline text-sm">
                <div class="card-header">
                    <h4>Ảnh sản phẩm</h4>
                </div>

                <div class="form-group">
                    <input type="file" name="image" class="form-control" id="upload">
                </div>
            </div>

        </div>
    </div>
    </div>


    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Thêm</button>
    </div>
</form>
@endsection