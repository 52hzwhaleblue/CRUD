@extends('admin.layout')
@section('title')
    Thêm Sản phẩm
@endsection
@section('content')
    <form method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-8">
                <div class="card-body">
                    <div class="form-group">
                        <label for="menu">Ảnh Sản Phẩm</label>
                        <input type="file" name="image" class="form-control" id="upload">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="menu">Tên Sản Phẩm</label>
                                <input type="text" name="name" class="form-control" placeholder="Nhập tên sản phẩm">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Mô Tả </label>
                        <textarea name="desc" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Mô Tả Chi Tiết</label>
                        <textarea name="content" id="cke_content" class="form-control"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">VND</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Giá bán" name="regular_price">
                        <div class="input-group-append">
                            <span class="input-group-text">.000</span>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">VND</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Giá mới" name="sale_price">
                        <div class="input-group-append">
                            <span class="input-group-text">.000</span>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Chiết khấu</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Chiết khấu" name="discount">
                        <div class="input-group-append">
                            <span class="input-group-text">%</span>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">SLTK</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Số lượng tồn kho" name="stock">
                        <div class="input-group-append">
                            <span class="input-group-text">Number</span>
                        </div>
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
            <div class="col-lg-4">
                Danh mục sản phẩm
                <div class="d-md-flex">
                    <div class="m-b-10 m-r-15">
                        <select name="id_list" class="custom-select" style="min-width: 180px;" >
                            @foreach($splist as $k => $v)
                                <option value="{{  $v->id  }}"> {{  $v->name  }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="m-b-10">
                        <select name="id_cat" class="custom-select" style="min-width: 180px;" >
                            @foreach($spcat as $k => $v)
                                <option value="{{  $v->id  }}"> {{  $v->name  }}</option>
                        @endforeach
                        </select>
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
