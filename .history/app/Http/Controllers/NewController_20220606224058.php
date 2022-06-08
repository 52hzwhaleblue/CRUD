<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
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
}
