<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $carts = DB::table('carts')
            ->Where('id_user', auth()->user()->id)
            ->get();

            return view('user.checkout.cart',[
                'carts' => $carts,
            ]);
        }
        else{
            dd("Vui lòng login");
        }

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
        if(Auth::check()){ 
            $id_user = Auth::user()->id;
            
            $cart = new Cart;

            $cart->id_user = $id_user;
            $cart->id_prod = $request->get('id_prod');
            $cart->photo = $request->get('photo');
            $cart->name = $request->get('name');
            $cart->regular_price = $request->get('regular_price');
            $cart->sale_price = $request->get('sale_price');
            $cart->quantity = $request->get('quantity');
            $cart->temp_price =$request->get('sale_price') * $request->get('quantity');
            $cart->save();

            return redirect()->route('checkout.cart');
        }
        else{  
            return view('user.Auth.login');
        }
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
