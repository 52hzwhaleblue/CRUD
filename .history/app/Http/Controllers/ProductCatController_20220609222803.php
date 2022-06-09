<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\ProductCat;

class ProductCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProductCat $productCat)
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
        $file_name = Date('Ymd').'-'.'product_cat'.$countProductCat.'.'.$ext;
        $file->move(public_path('backend/assets/img/products'),$file_name);//chuyển file vào đường dẫn chỉ định
        }

        $product_cat = new ProductCat;
        $product_cat->name = $request->get('name');
        $product_cat->desc = $request->get('desc');
        $product_cat->content = $request->get('content');
        $product_cat->photo = $file_name;
        $product_cat->status = implode(',', $request->get('status'));

        $product_cat->save();

        return redirect()->route('product-cat.index');
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
        return view('admin.product-cat.edit',[
        'each' => $ProductCat,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,ProductCat $ProductCat)
    {
        // $ProductCat sẽ validate xem có tồn tại id hay chưa, không cần xét điều kiện where
        $fix_status = implode(',', $request->get('status'));
        $countProductCat = ProductCat::all()->count();

        if($request->has('image')){
            $file= $request->image;
            $ext = $request->image->extension();
            $file_name = Date('Ymd').'-'.'product'. $countProductCat.'.'.$ext;
            $file->move(public_path('backend/assets/img/products'),$file_name);
        }
        $ProductCat->update(
            [
                'name' => $request->get('name'),
                'desc' => $request->get('desc'),
                'content' => $request->get('content'),
                'status'=> $fix_status,
            ],
            $request->except([
                '_token',
                '_method',
            ])
        );

    return redirect()->route("product-cat.index");
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
        return redirect()->route('product_cat.index');
    }
}
