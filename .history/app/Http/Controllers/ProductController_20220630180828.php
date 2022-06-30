<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ProductList;
use App\Models\Products;

class ProductController extends Controller
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
        
        return view('user.product.products',[
            'splist' => $splist,
            'sanpham' => $sanpham,
            'splistnb' => $splistnb,
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $keywords = $request->keywords_submit;
        $search= DB:table('products')->where('name','like', .$keywords '%')->get();
    }
}
