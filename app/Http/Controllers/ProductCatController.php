<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\ProductCat;
use App\Models\Products;

class ProductCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProductCat $productCast)
    {
           // $data = DB::table('product_cats')
           // ->whereJsonContains('status', 'noibat')
           // ->get();

           // var_dump($data);
           // die();

            $data = ProductCat::get();
            return view('admin.product-cat.index',[
                'data' => $data,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product-cat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $countProductCat = ProductCat::all()->count();

        if($request->has('image')){
            $file= $request->image;
            $ext = $request->image->extension();//lấy đuôi file png||jpg
            $file_name = Date('Ymd').'-'.'product'.$countProductCat.'.'.$ext;
            $file->move(public_path('backend/assets/img/products'),$file_name);//chuyển file vào đường dẫn chỉ định
        }

        $id_list = $request->id_list;
        // dd($id_list);

        $product_cat = new ProductCat;
        $product_cat->id_list = $id_list;
        $product_cat->name = $request->get('name');
        $product_cat->desc = $request->get('desc');
        $product_cat->content = $request->get('content');
        $product_cat->photo = $file_name;
        $product_cat->status = implode(',', $request->get('status'));

        $product_cat->save();

        return redirect()->route('product_cat.index')->with('message', 'Bạn đã thêm danh mục cấp 2 thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCat $ProductCat)
    {

        // Lấy tên danh mục cấp 1 với id sản phẩm
        $productList = ProductCat::find($ProductCat->id)->product_list()->get();
        
        return view('admin.product-cat.edit',[
        'each' => $ProductCat,
        'productList' => $productList,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,ProductCat $productCat)
    {
        $fix_status = implode(',', $request->get('status'));

        $countproductCat = ProductCat::all()->count();

        if($request->has('image')){
            $file= $request->image;
            $ext = $request->image->extension();
            $file_name = Date('Ymd').'-'.'productCat'.$countproductCat.'.'.$ext;
            $file->move(public_path('backend/assets/img/products'),$file_name);
        }else{
        $id = $request->input('id');

        $data = DB::table('product_cats')
            ->where('id',$id)
            ->select('photo')
            ->get();
            $file_name = $data[0]->photo;
        }
        $productCat->update(
        [
            'name' => $request->get('name'),
            'desc' => $request->get('desc'),
            'content' => $request->get('content'),
            'photo' => $file_name,
            'status'=> $fix_status,
        ],
        $request->except([
            '_token',
            '_method',
        ])
        );
        return redirect()->route("product_cat.index")->with('message', 'Bạn đã cập nhật danh mục cấp 2 thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCat $ProductCat)
    {
        $ProductCat->delete();
        return redirect()->route('product_cat.index')->with('message', 'Bạn đã xóa danh mục cấp 2 thành công!');
    }
}
