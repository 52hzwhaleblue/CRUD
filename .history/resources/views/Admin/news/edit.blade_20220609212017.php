@extends('admin.layout')
@section('title')
    Chỉnh sửa sản phẩm cấp 2
@endsection
@section('content')
<div class="col-lg-6">
    <form   method="post" action="{{ route('news.update', $each) }} " enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $each->name }}" id="name" placeholder="name "></br>
    <input type="text" name="desc" value="{{ $each->desc }}" id="desc" placeholder="desc "></br>
    <input type="text" name="content" value="{{ $each->content }}"  placeholder="content "></br>
    <input type="file" class="form-control" placeholder="Chọn ảnh" value="{{ $each->photo }}" name="image"></br>

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
    <button type="submit">
        Lưu chỉnh sửa
    </button>
</form>
</div>

@endsection