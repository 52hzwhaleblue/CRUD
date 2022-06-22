<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderDetails;

class OrderController extends Controller
{

    public function index()
    {
        return view('user.cart.index');
    }

    public function addToCart(Request $request)
    {
        if(Auth::check()){
            $id_user = Auth::user()->id;
            $email = Auth::user()->email;
            $fullname = Auth::user()->name;

            $order = new Order;

            $order->id_user = $id_user;
            $order->fullname = $fullname;
            $order->email = $email;
            $order->id_order_status = 1;
            $order->id_payment_method = 1;

            $order->save();

            $orderDetail = new OrderDetails;
            $orderDetail->id_order = $order->id;
            $orderDetail->id_prod = $request->get('id_prod');
            $orderDetail->photo = $request->get('photo');
            $orderDetail->name = $request->get('name');
            $orderDetail->regular_price = $request->get('regular_price');
            $orderDetail->sale_price = $request->get('sale_price');
            $orderDetail->quantity = $request->get('quantity');
            $orderDetail->temp_price = $request->get('sale_price') * $request->get('quantity');

            $orderDetail->save();
        }
        else{
            $id_user = Auth::user()->id;
            dd($id_user);
        }
    }

        // public function buyNow()
        // {
        //     if(Auth::check()){
        //         return view('user.auth.register');
        //     }
        //     else{

        //     }
        // }
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
