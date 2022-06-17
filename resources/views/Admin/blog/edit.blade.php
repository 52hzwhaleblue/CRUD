@extends('admin.layout')
@section('title')
    Chỉnh sửa Blog
@endsection
@section('content')
    <form method="post" action="{{ route('blog.update', $each) }} " enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-footer text-sm sticky-top">
            <button type="submit" class="btn btn-primary">Lưu</button>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="card card-primary card-outline text-sm">
                    <div class="card-header">
                        <h4>Nội dung sản phẩm</h4>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <label hidden="" for="menu">ID</label>
                            <input hidden id="menu" type="text" name="id" value="{{ $each->id }}"
                                class="form-control" id="upload">
                        </div>
                        <div class="form-group">
                            <label for="menu">Tên Sản Phẩm</label>
                            <input type="text" name="name" value="{{ $each->name }}" class="form-control"
                                placeholder="Nhập tên sản phẩm">
                        </div>

                        <div class="form-group">
                            <label>Mô Tả </label>
                            <textarea name="desc" class="form-control">{{ $each->desc }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Mô Tả Chi Tiết</label>
                            <textarea name="content" id="cke_content" class="form-control">{{ $each->content }}</textarea>
                        </div>
                    </div>

                    <div class="card-body">
                        {{-- {{ $v->status }} --}}
                        {{-- Dành cho lọc sản phẩm theo status --}}
                        <?php if($each->status == '"noibat,hienthi"') {?>
                        <input type="checkbox" name="status[]" value="noibat" checked> Nổi bật
                        <input type="checkbox" name="status[]" value="hienthi" checked> Hiển thị
                        <?php } elseif($each->status == '"hienthi"') {?>
                        <input type="checkbox" name="status[]" value="noibat"> Nổi bật
                        <input type="checkbox" name="status[]" value="hienthi" checked> Hiển thị
                        <?php } elseif($each->status == '""noibat""') {?>
                        <input type="checkbox" name="status[]" value="noibat" checked> Nổi bật
                        <input type="checkbox" name="status[]" value="hienthi"> Hiển thị
                        <?php }?>

                        {{-- Dành cho lọc tất cả sản phẩm --}}
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

            <div class="card card-primary card-outline text-sm">
                <div class="card-header">
                    <h5>Ảnh sản phẩm</h5>
                </div>

                <div class="card-body">
                    <div style=" width: 60%; margin: auto;" class="card-image">
                        <img style="background:white;" src="{{ asset('backend/assets/img/products/' . $each->photo) }}"
                            class="rounded" alt="Ảnh" width="250" height="250">
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <input type="file" name="image" value="{{ $each->photo }}" class="form-control"
                                id="upload">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
