@extends('admin.layout')
@section('title')
    Sản phẩm cấp 1
@endsection
@section('content')
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
            href="{{ route('product_list.create') }}"> Add New</a></button>
</div>
{{-- {{ $data->links() }} --}}

<div class="card">
    <div class="card-body">
        <div class="row m-b-30">
            <div class="col-lg-8">
                <div class="d-md-flex">
                    <div class="m-b-10 m-r-15">
                        <select class="custom-select" style="min-width: 180px;">
                            <option selected>Catergory</option>
                            <option value="all">All</option>
                            <option value="homeDeco">Home Decoration</option>
                            <option value="eletronic">Eletronic</option>
                            <option value="jewellery">Jewellery</option>
                        </select>
                    </div>
                    <div class="m-b-10">
                        <select class="custom-select" style="min-width: 180px;">
                            <option selected>Status</option>
                            <option value="all">All</option>
                            <option value="inStock">In Stock </option>
                            <option value="outOfStock">Out of Stock</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-right">
                <button class="btn btn-primary">
                    <i class="anticon anticon-plus-circle m-r-5"></i>
                    <span>Add Product</span>
                </button>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover e-commerce-table">
                <thead>
                    <tr>
                        <th>
                            <div class="checkbox">
                                <input id="checkAll" type="checkbox">
                                <label for="checkAll" class="m-b-0"></label>
                            </div>
                        </th>
                        <th>STT</th>
                        <th>Hình</th>
                        <th>Tiêu đề</th>
                        <th>Trạng thái</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $k =>$v)
                    <tr>
                        <td>
                            <div class="checkbox">
                                <input id="check-item-1" type="checkbox">
                                <label for="check-item-1" class="m-b-0"></label>
                            </div>
                        </td>

                        <td># {{ $v->id }}</td>

                        <td>
                            <img style="background:white" src="{{ asset('backend/assets/img/products/'.$v->photo) }}"
                                class="rounded" alt="Ảnh" width="70" height="70">
                        </td>
                        </td>

                        <td>{{ $v->name }}</td>
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
                            Edit
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
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
</div>
@endsection
