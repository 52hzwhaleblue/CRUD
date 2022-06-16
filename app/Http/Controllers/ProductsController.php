<?php

namespace App\Http\Controllers;


use App\Models\Products;
use Illuminate\Http\Request;
use DB;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,Products $Products)
    {
        $data = Products::get();
        return view('admin.product.index',[
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
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $countProducts = Products::all()->count();

        if($request->has('image')){
            $file= $request->image;
            $ext = $request->image->extension();//lấy đuôi file png||jpg
            $file_name = Date('Ymd').'-'.'Products'.$countProducts.'.'.$ext;
            $file->move(public_path('backend/assets/img/products'),$file_name);//chuyển file vào đường dẫn chỉ định
        }
        $id_list = $request->id_list;
        $id_cat = $request->id_cat;
        // dd($id_list);
        $Products = new Products;

        $Products->id_list = $id_list;
        $Products->id_cat = $id_cat;
        $Products->name = $request->get('name');
        $Products->desc = $request->get('desc');
        $Products->content = $request->get('content');
        $Products->regular_price = $request->get('regular_price');
        $Products->discount = $request->get('discount');
        $Products->sale_price = $request->get('sale_price');
        $Products->stock = $request->get('stock');
        $Products->photo = $file_name;
        $Products->status = implode(',', $request->get('status'));

        $Products->save();

        return redirect()->route('product.index')->with('message', 'Bạn đã thêm sản phẩm thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        // Lấy tên danh mục cấp 1 với id sản phẩm
        $productList = Products::find($products->id)->product_list()->get();
        $productCat = Products::find($products->id)->product_cat()->get();
        // dd($idList[0]->name);
        return view('admin.product.edit',[
            'each' => $products,
            'productList' => $productList,
            'productCat' => $productCat,
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Products $Product)
    {
        $fix_status = implode(',', $request->get('status'));

        $countProduct = Products::all()->count();

        $id_list = $request->id_list;
        $id_cat = $request->id_cat;

        if($request->has('image')){
            $file= $request->image;
            $ext = $request->image->extension();
            $file_name = Date('Ymd').'-'.'product'.$countProduct.'.'.$ext;
            $file->move(public_path('backend/assets/img/products'),$file_name);
        }else{
            $id = $request->input('id');

            $data = DB::table('products')
            ->where('id',$id)
            ->select('photo')
            ->get();

            $file_name = $data[0]->photo;
        }
        
        $Product->update(
        [
            'id_list' => $id_list,
            'id_cat' => $id_cat, 
            'name' => $request->get('name'),
            'desc' => $request->get('desc'),
            'content' => $request->get('content'),
            'regular_price' => $request->get('regular_price'),
            'discount' => $request->get('discount'),
            'sale_price' => $request->get('sale_price'),
            'stock' => $request->get('stock'),
            'photo' => $file_name,
            'status'=> $fix_status,
        ],
        $request->except([
            '_token',
            '_method',
            ])
        );


        return redirect()->route("product.index")->with('message', 'Bạn đã cập nhật sản phẩm thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        $products->delete();
        return redirect()->route('product.index')->with('message', 'Bạn đã xóa sản phẩm thành công!');
    }
}
