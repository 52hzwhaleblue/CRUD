<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\ProductList;
use App\Models\Products;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sanpham = Products::get();
        $splist = DB::table('product_lists')
        ->whereJsonContains('status', 'noibat')
        ->get();

        $splistnb = DB::table('products')
        ->join('product_lists', 'product_lists.id', '=', 'products.id_list')
        ->select('products.*')
        ->get();

        // $prod_details = DB::table('product_details')
        // ->where('id_prod', $id)
        // ->get();
        
        return view('user.index.index',[
            'splist' => $splist,
            'sanpham' => $sanpham,
            'splistnb' => $splistnb,
        ]);
    }

    public function laySanPhamNoiBat(Request $request)
    {
        if($request->get('"noibat,hienthi"')){
            $prodnb = DB::table('products')
            ->all();
        }
        else{
            $prodnb = DB::table('products')
            ->whereJsonContains('status', $request->get('type'))
            ->get();
        }

        $output = '';
        foreach ($prodnb as $k =>$v){
            
            $output .='
            <div class="product-item">
                    <div class="product-img scale-img">
                        <a href='. route('user.product_detail', $v->id) .'>
                            <img src='.asset("backend/assets/img/products/$v->photo").'
                                alt="" />
                        </a>

                        <div class="product-modal">
                            <div class="modal-cart">
                                <i class="fa-solid fa-bag-shopping"></i>
                            </div>
                            <div class="modal-quickview">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                            <div class="modal-wishlist">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                        </div>
                    </div>
                    <h3 class="name-product"><a href=""> '.$v->name.' </a></h3>
                    <div class="product-price">
                        <span class="price-sale">'.number_format($v->regular_price, 2).' <sup>đ</sup></span>
                        <span class="price-current">'.$v->sale_price.' <sup>đ</sup></span>
                    </div>
                </div>    
            ';
        }
        
        // return response()->json(array('prodnb'=> $prodnb), 200);
        return response()->json($output);

    }

    public function popup_product(Request $request)
    {
        $prods = DB::table('products')
        ->where('id', $request->id)
        ->get();

        $output = '';
        foreach ($prods as $k =>$v){
        $output .='
            <div class="popup-item">
                <div class="fotorama" data-nav="thumbs" data-thumbwidth="98" data-thumbheight="98">
                    <img src='.asset("backend/assets/img/products/$v->photo").' alt="" width="365" height="365" />
                    @foreach($prod_details as $k => $v)
                        <img src='.asset("backend/assets/img/products/$v->photo").' alt="" />
                    @endforeach
                </div>

                </div>
                <h3 class="name-product"><a href=""> '.$v->name.' </a></h3>
                <div class="product-price">
                    <span class="price-sale">'.number_format($v->regular_price, 2).' <sup>đ</sup></span>
                    <span class="price-current">'.$v->sale_price.' <sup>đ</sup></span>
                </div>
            </div>
            ';
        }
        return response()->json($output);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
