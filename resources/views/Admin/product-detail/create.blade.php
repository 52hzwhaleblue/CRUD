@extends('admin.layout')
@section('title')
    Thêm chi tiết sản phẩm
@endsection
@section('content')
    <form method="post" action="{{ route('product_details.store') }}" enctype="multipart/form-data">
        @method("POST")
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-primary card-outline text-sm">
                    <div class="card-header">
                        <h5>Mã sản phẩm</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <input  type="text" name="id_prod" value="{{ $id_prod }}" >
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-6">
                <div class="card card-primary card-outline text-sm">
                    <div class="card-header">
                        <h5>Ảnh sản phẩm</h5>
                    </div>
                    <div class="card-body">
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
        @csrf
    </form>
@endsection
