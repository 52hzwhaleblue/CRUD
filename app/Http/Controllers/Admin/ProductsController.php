<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\ProductDetails;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;

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


    public function showuploadImages(){
        return view('admin.product.detail');
    }

    public function uploadImages(Request $request){
        $data = array();
        
        $validator = Validator::make($request->all(),[
            'file' => 'required|mimes:png,jpg,jpeg|max:2048',
        ]);

        if($validator->fails()){
            $data['success'] =0;
            $data['error'] = $validator->errors()->first('file');
        }
        else{
            $file = $request->file('file');
            $filename = time().'_'.$file->getClientOriginalName();


            #File upload location
            $location = 'backend/assets/img/products';

            # Uplaod Files
            $file->move($location, $filename);

            # Response
            $data['success'] =1;
            $data['message'] = 'Photo uploaded successfully ';

        }
        return response()->json($data);

        $ProductDetails = new ProductDetails;

        $ProductDetails->id_prod = 5;
        $ProductDetails->photo = $filename;
        $ProductDetails->save();
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
            $ext = $request->image->extension();//l???y ??u??i file png||jpg
            $file_name = Date('Ymd').'-'.'Products'.$countProducts.'.'.$ext;
            $file->move(public_path('backend/assets/img/products'),$file_name);//chuy???n file v??o ???????ng d???n ch??? ?????nh
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

        return redirect()->route('product.index')->with('message', 'B???n ???? th??m s???n ph???m th??nh c??ng!');
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
        // L???y t??n danh m???c c???p 1 v???i id s???n ph???m
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
    public function update(Request $request,Products $Products)
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
        
        $Products->update(
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

        return redirect()->route("product.index")->with('message', 'B???n ???? c???p nh???t s???n ph???m th??nh c??ng!');
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
        return redirect()->route('product.index')->with('message', 'B???n ???? x??a s???n ph???m th??nh c??ng!');
    }
}
