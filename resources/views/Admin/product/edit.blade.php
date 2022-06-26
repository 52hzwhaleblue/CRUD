@extends('admin.layout')
@section('title')
    Chỉnh sửa sản phẩm
@endsection

@section('content')
    <form method="post" action="{{ route('product.update', $each) }} " enctype="multipart/form-data">
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
                </div>

                <div class="card card-primary card-outline text-sm">
                    <div class="card-header">
                        <h4>Thông tin sản phẩm</h4>
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

                    <div class="row">
                        <div class="form-group col-lg-4">
                            <label for="menu">Giá bán</label>
                            <input type="text" name="regular_price" value="{{ $each->regular_price }}"
                                class="form-control" placeholder="Nhập giá sản phẩm">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="menu">Giá giảm</label>
                            <input type="text" name="sale_price" value="{{ $each->sale_price }}" class="form-control"
                                placeholder="Nhập giá giảm">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="menu">Discount %</label>
                            <input type="text" name="discount" value="{{ $each->discount }}" class="form-control"
                                placeholder="Nhập discout %">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="menu">Stock</label>
                            <input type="text" name="stock" value="{{ $each->stock }}" class="form-control"
                                placeholder="Nhập tồn kho">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card card-primary card-outline text-sm">
                    <div class="card-header">
                        <h4>
                            Danh mục sản phẩm
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="d-md-flex justify-content-between">
                            <div class="m-b-10 m-r-15">
                                <h5>Danh mục cấp 1</h5>
                                <select name="id_list" class="custom-select" style="min-width: 180px;">
                                    <option value="{{ $productList[0]->id }}"> {{ $productList[0]->name }}</option>
                                    @foreach ($splist as $k => $v)
                                        <option value="{{ $v->id }}"> {{ $v->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="m-b-10">
                                <h5>Danh mục cấp 2</h5>

                                <select name="id_cat" class="custom-select" style="min-width: 180px;">
                                    <option value="{{ $productCat[0]->id }}"> {{ $productCat[0]->name }}</option>
                                    @foreach ($spcat as $k => $v)
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

                        <div style=" width: 60%; margin: auto;" class="card-image">
                            <img style="background:white;"
                                src="{{ asset('backend/assets/img/products/' . $each->photo) }}" class="rounded"
                                alt="Ảnh" width="250" height="250">
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="file" name="image" value="{{ $each->photo }}" class="form-control"
                                    id="upload">
                            </div>
                        </div>
                    </div>
                    <h3><a  href="{{ route("product_details.create", $each->id) }}">Tạo chi tiết sản phẩm</a></h3>
                </div>
            </div>
        </div>
    </form>


    <div class="card card-primary card-outline text-sm">
        <div class="card-header">
            <h5>Chi tiết ảnh sản phẩm</h5>
            <div class="card-body">
                <form enctype="multipart/form-data" class="dropzone" action="{{ route('product.uploadImages') }} ">

                    <script type="text/javascript">
                        var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

                        Dropzone.autoDiscover = false;
                        var myDropzone = new Dropzone(".dropzone", {
                            maxFilesize: 2,
                            acceptedFiles: ".jpeg,.jpg,.png"
                        });

                        myDropzone.on("sending", function(file, xhr, formData) {
                            formData.append("_token", CSRF_TOKEN);
                        });

                        myDropzone.on("success", function(file, response) {
                            if (response.success == 0) {
                                alert(response.error);
                            }
                        });
                    </script>
                </form>
            </div>
        </div>
    </div>
@endsection
