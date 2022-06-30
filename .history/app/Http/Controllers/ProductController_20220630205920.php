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
        $result = $request->result;
        $result = str_replace('','%',$result);
      /*   dd($result); */
        $data['sanphams'] = Products::where('name','like','%'.$result.'%')->get();
        return view('product.search',$data);
    }
}
