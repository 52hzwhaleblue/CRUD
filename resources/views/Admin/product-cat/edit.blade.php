@extends('admin.layout')
@section('title')
    Chỉnh sửa sản phẩm cấp 2
@endsection
@section('content')
    <form method="post" action="{{ route('product_cat.update', $each) }} " enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
                    <div class="col-lg-8">
            <div class="form-group">
                <label hidden="" for="menu">ID</label>
                <input hidden id="menu" type="text" name="id" value="{{ $each->id }}" class="form-control"
                    id="upload">
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

            <div class="form-group">
                <label>Mô Tả </label>
                <textarea name="desc" class="form-control">{{ $each->desc }}</textarea>
            </div>

            <div class="form-group">
                <label>Mô Tả Chi Tiết</label>
                <textarea name="content" id="cke_content" class="form-control">{{ $each->content }}</textarea>
            </div>

            <div class="form-group">
                <label>Trạng thái</label>
                <div class="custom-control custom-radio">
                    <?php if($each->status == 'noibat,hienthi') {?>
                    <input type="checkbox" name="status[]" value="noibat" checked> Nổi bật
                    <input type="checkbox" name="status[]" value="hienthi" checked> Hiển thị
                    <?php } elseif($each->status == 'hienthi') {?>
                    <input type="checkbox" name="status[]" value="noibat"> Nổi bật
                    <input type="checkbox" name="status[]" value="hienthi" checked> Hiển thị
                    <?php } elseif($each->status == 'noibat') {?>
                    <input type="checkbox" name="status[]" value="noibat" checked> Nổi bật
                    <input type="checkbox" name="status[]" value="hienthi"> Hiển thị
                    <?php }?>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            Danh mục sản phẩm
            <div class="d-md-flex">
                <div class="m-b-10 m-r-15">
                    <select name="id_list" class="custom-select" style="min-width: 180px;">
                        <option value="{{ $productList[0]->id }}"> {{ $productList[0]->name }}</option>
                        @foreach ($splist as $k => $v)
                            <option value="{{ $v->id }}"> {{ $v->name }}</option>
                        @endforeach
                    </select>
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
