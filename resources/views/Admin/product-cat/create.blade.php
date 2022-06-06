@extends('admin.layout')
@section('title')
    Chỉnh sửa sản phẩm cấp 2
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <form method="post" action="{{ route('product_cat.store') }}"  enctype="multipart/form-data" >
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
        {{-- <div class="col-lg-6">
            <form method="post" action="{{ route('product_cat.store') }}" enctype="multipart/form-data"
                class="dropzone" id="dropzone">
                @csrf
            </form>
        </div> --}}
    </div>

    {{-- <script type="text/javascript">
        Dropzone.options.dropzone = {
            maxFilesize: 12,
            resizeQuality: 1.0,
            acceptedFiles: ".jpeg,.jpg,.png",
            addRemoveLinks: true,
            timeout: 60000,
            removedfile: function(file) {
                var name = file.upload.filename;
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },
                    type: 'POST',
                    url: '{{ url('files/destroy') }}',
                    data: {
                        filename: name
                    },
                    success: function(data) {
                        console.log("File has been successfully removed!!");
                    },
                    error: function(e) {
                        console.log(e);
                    }
                });
                var fileRef;
                return (fileRef = file.previewElement) != null ?
                    fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },
            success: function(file, response) {
                console.log(response);
            },
            error: function(file, response) {
                return false;
            }
        };
    </script> --}}
@endsection
