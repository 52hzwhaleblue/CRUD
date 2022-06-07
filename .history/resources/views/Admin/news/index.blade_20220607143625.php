@extends('admin.layout')
@section('title')
    Trang thông tin
@endsection
@section('content')
<table class="table">
    <thead>
    <tr>
        <th style="width: 50px">ID</th>
        <th>ID_News_Type</th>
        <th>Photo</th>
        <th>Name</th>
        <th>Desc</th>
        <th>Nội dung</th>
        <th>Trạng thái</th>
        <th>Ngày tạo</th>
        <th>Loại</th>
        <th style="width: 100px">&nbsp;</th>
    </tr>
    </thead>
    <tbody>
        @foreach($products as $key => $product)
        <tr>
            <th>ID_News_Type</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Desc</th>
            <th>Nội dung</th>
            <th>Trạng thái</th>
            <th>Ngày tạo</th>
            <th>Loại</th>
            <td>
                <a class="btn btn-primary btn-sm" href="/admin/products/edit/{{ $product->id }}">
                    <i class="fas fa-edit"></i>
                </a>
                <a href="#" class="btn btn-danger btn-sm"
                   onclick="removeRow({{ $product->id }}, '/admin/products/destroy')">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
