@extends('admin.layout')
@section('title')
    Sản phẩm cấp 1
@endsection
@section('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <div class="app-title">
        <div>
            <h1>All Products</h1>
            {{-- <p>Xin chào {{ Session::get('emp')->fullName }} </p> --}}
        </div>
        <ul class="app-breadcrumb breadcrumb">

            <li class="breadcrumb-item"><i class="fa fa-home" aria-hidden="true"></i></li>
            <li class="breadcrumb-item"><a href="#">All Products</a></li>
        </ul>
    </div>
    <div class="col-sm-4">
        <button type="button" class="btn btn-info add-btn "><i class="fa fa-plus"></i><a
                href="{{ route('product_cat.create') }}"> Add New</a></button>
    </div>
    
        <table class="table table-striped">
        <thead>
            <tr>
                <th>
                    <h5>STT</h5>
                </th>
                <th>
                    <h5>Photo</h5>
                </th>
                <th>
                    <h5>Name</h5>
                </th>
                <th>
                    <h5>Trạng thái</h5>
                </th>
                    <h5>Edit</h5>
                </th>
                <th>
                    <h5>Delete</h5>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $k =>$v)
                <tr>
                    <td> {{ $v->id }}</td>
                    <td>
                        <img style="background:white"
                                    src="{{ asset('backend/assets/img/products/'.$v->photo) }}"
                                    class="rounded" alt="Ảnh" width="70" height="70"> </td>
                    </td>
                    <td> {{ $v->name }}</td>

                    <td> 
                        {{-- {{ $v->status }} --}}
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
                        <a class="btn btn-info" href="{{ route('product_cat.edit', $v->id) }}">
                            <i class="fas fa-edit"></i>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('product_cat.destroy', $v->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- {{ $data->links() }} --}}
@endsection
