@extends('admin.layout')
@section('title')
Chỉnh sửa đơn hàng
@endsection
@section('content')
<form method="post" action="{{ route('ordermanagement.update', $each) }} " enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card-body">
        <div class="col-lg-4">
            Trạng thái đơn hàng
            <div class="d-md-flex">
                <div class="m-b-10 m-r-15">
                    <select name="id_order_status" class="custom-select" style="min-width: 180px;">
                        @foreach ($order_status as $k => $v)
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