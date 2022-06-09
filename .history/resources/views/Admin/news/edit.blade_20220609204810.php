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
            <input type="file" name="image" value="{{ $each->photo }}" class="form-control" id="upload">
            {{-- <input type="hidden" name="photo"  value="{{ $each->photo }}" id="photo"> --}}
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

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Lưu Sản Phẩm</button>
    </div>
    @csrf
</form>

@endsection