@extends('admin.layout')
@section('title')
    Tất cả sản phẩm
@endsection
@section('content')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
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
                href="{{ route('product.create') }}"> Add New</a></button>
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
                            <select id="productListStatus" class="custom-select" style="min-width: 180px;">
                                <option value="noibat,hienthi">Tất cả </option>
                                <option value="noibat">Nổi bật </option>
                                <option value="hienthi">Hiển thị</option>
                            </select>
                        </div>
                    </div>
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
                    <tbody id="locSanPhamTheoStatus">
                        @foreach ($data as $k => $v)
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="check-item-1" type="checkbox">
                                        <label for="check-item-1" class="m-b-0"></label>
                                    </div>
                                </td>
                                <td> {{ $v->id }} </td>
                                <td>
                                    <img style="background:white"
                                        src="{{ asset('backend/assets/img/products/' . $v->photo) }}"
                                        class="rounded" alt="Ảnh" width="70" height="70">
                                </td>
                                </td>

                                <td>{{ $v->name }}</td>
                                <td>
                                    {{-- {{ $v->status }} --}}
                                    {{-- Dành cho lọc sản phẩm theo status --}}
                                    <?php if($v->status == '"noibat,hienthi"') {?>
                                    <input type="checkbox" name="status[]" value="noibat" checked> Nổi bật
                                    <input type="checkbox" name="status[]" value="hienthi" checked> Hiển thị
                                    <?php } elseif($v->status == '"hienthi"') {?>
                                    <input type="checkbox" name="status[]" value="noibat"> Nổi bật
                                    <input type="checkbox" name="status[]" value="hienthi" checked> Hiển thị
                                    <?php } elseif($v->status == '""noibat""') {?>
                                    <input type="checkbox" name="status[]" value="noibat" checked> Nổi bật
                                    <input type="checkbox" name="status[]" value="hienthi"> Hiển thị
                                    <?php }?>

                                    {{-- Dành cho lọc tất cả sản phẩm --}}
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
                                {{-- <td>{{ $v->id_list }}</td>
                                <td>{{ $v->cat }}</td> --}}
                                
                                <td>
                                    <a class="btn btn-info" href="{{ route('product.edit', $v->id) }}">
                                        Edit
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('product.destroy', $v->id) }}" method="post">
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

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>

    <script type="text/javascript">
        $('#productListStatus').on('change', function(e) {
            var productListStatus = e.target.value;
            
            $.get('product-list/locSanPhamTheoStatus/'+productListStatus,function(data){
                $('#loadSanphamTheoStatus').html(data);
            });
        });
    </script>

    
@endsection
