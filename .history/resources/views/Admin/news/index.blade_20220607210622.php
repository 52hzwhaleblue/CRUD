@extends('admin.layout')
@section('title')
    Trang thông tin
@endsection
@section('content')
<div class="col-sm-4">
    <button type="button" class="btn btn-info add-btn "><i class="fa fa-plus"></i><a
            href="{{ route('news.create') }}"> Add New</a></button>
</div>
<table class="table">
    <thead>
    <tr>
        <th style="width: 50px">ID</th>
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
        @foreach($data as $k => $v)
        <tr>
            <td>{{$v->id}}</td>
            <td>a href="{{ $v->photo }}" target="_blank">
                <img src="{{ $v->photo }}" height="40px">
            </a></td>
            <td>{{ $v->name }}</td>
            <td>{{ $v->desc }}</td>
            <td>{{ $v->content }}</td>
            <td>{{ $v->status }}</td>
            <td>{{$v->date_create}}</td>
            <td>{{$v->type}}</td>
            <td>
                <a class="btn btn-primary btn-sm" href="/admin/products/edit/{{ $product->id }}">
                    <i class="fas fa-edit"></i>
                </a>
                <a href="#" class="btn btn-danger btn-sm"
                   onclick="removeRow({{ $v->id }}, '/admin/products/destroy')">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
