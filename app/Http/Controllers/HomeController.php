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
        // Lấy danh mục cấp 1
        $prod_list = ProductList::get();
        $prod = Products::get();

        return view('user.index.index',[
            'prod_list' => $prod_list,
            'prod' => $prod,
        ]);
    }
    public function laySanPhamNoiBat()
    {
        $prodnb = DB::table('products')
        ->whereJsonContains('status', 'noibat')
        ->get();

        $output = '';
        foreach ($prodnb as $k =>$v){
            
            $output .='
            <div class="product-item">
                    <div class="product-img scale-img">
                        <a href="">
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
