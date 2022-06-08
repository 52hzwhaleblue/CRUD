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
        <th>Cập Nhật</th>
        <th style="width: 100px">&nbsp;</th>
    </tr>
    </thead>
    <tbody>
        @foreach($data as $k => $v)
        <tr>
            <td>{{$v->id}}</td>
            <td>
                <img src="{{ asset('backend/assets/img/products/'.$v->photo) }}" height="40px">
            </td>
            <td>{{ $v->name }}</td>
            <td>{{ $v->desc }}</td>
            <td>{{ $v->content }}</td>
            <td>
                <?php if($v->status == 'noibat,hienthi') {?>
                    <input type="checkbox" name="status[]" value="noibat" checked> Nổi bật
                    <input type="checkbox" name="status[]" value="hienthi" checked> Hiển thị
                    <?php } elseif($v->status == 'hienthi') {?>
                    <input type="checkbox" name="status[]" value="noibat"> Nổi bật
                    <input type="checkbox" name="status[]" value="hienthi" checked> Hiển thị
                    <?php } elseif($v->status == 'noibat') {?>
                    <input type="checkbox" name="status[]" value="noibat" checked> Nổi bật
                    <input type="checkbox" name="status[]" value="hienthi"> Hiển thị
                    <?php }?>
            </td>
            <td>
                <a class="btn btn-primary btn-sm" href="{{ route('news.edit', $v->id) }}">
                    <i class="fas fa-edit"></i>
                </a>
                <a href="" class="btn btn-danger btn-sm"
                   onclick="removeRow({{ route('news.destroy', $v->id) }})">
                    {{-- <i class="fas fa-trash"></i> --}}
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
