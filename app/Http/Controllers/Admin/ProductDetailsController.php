<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductDetails;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= ProductDetails::get();
        return view('admin.product-detail.index',[
            'data' => $data,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_prod)
    {
        
        return view('admin.product-detail.create',[
            'id_prod' => $id_prod,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_prod = $request->get('id_prod');


        if($request->has('image')){
            $file= $request->image;
            $ext = $request->image->extension();
            $file_name = Date('Ymd').'-'.'roducts-detail'.time().'.'.$ext;
            $file->move(public_path('backend/assets/img/products'),$file_name);
        }

        $ProductDetails = new ProductDetails;

        $ProductDetails->id_prod = $id_prod;
        $ProductDetails->photo = $file_name;

        $ProductDetails->save();

        return redirect()->route('product_details.index')->with('message', 'Bạn đã thêm chi tiết sản phẩm thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product_details  $product_details
     * @return \Illuminate\Http\Response
     */
    public function show(Product_details $product_details)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product_details  $product_details
     * @return \Illuminate\Http\Response
     */
    public function edit(Product_details $product_details)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product_details  $product_details
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product_details $product_details)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product_details  $product_details
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product_details $product_details)
    {
        //
    }
}
