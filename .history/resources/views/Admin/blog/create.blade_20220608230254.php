@extends('admin.layout')
@section('title')
    Thêm blog
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <form id="form_product_list" method="post" action="{{ route('blog.store') }}"  enctype="multipart/form-data" >
                @csrf
                
                <input type="text" name="name" id="name" placeholder="name ">
                <input type="text" name="desc" id="desc" placeholder="desc ">
                <input type="text" name="content" id="content" placeholder="content ">
                <input type="file" class="form-control" placeholder="Chọn ảnh" name="image">
                <input type="checkbox" name="status[]" value="noibat"> Nổi bật
                <input type="checkbox" name="status[]" value="hienthi"> Hiển thị

                <button type="submit">
                    Lưu
                </button>
            </form>
        </div>
    </div>
@endsection
