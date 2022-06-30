<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderStatus;
use Illuminate\Support\Facades\DB;

class OrderManagement extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $orders = DB::table('orders')->get();


       /*  $orders = DB::table('orders')
        ->join('payment_methods', 'orders.id_payment_method', '=', 'payment_methods.id')
        ->join('order_status', 'orders.id_order_status', '=', 'order_status.id')
        ->select('orders.*', 'payment_methods.name as method','order_status.name as order_status')
        ->get();
        return view('Admin.order.index',[
            'orders' => $orders,
        ]); */
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
    public function edit(Order $order)
    {
        // Lấy order_status
        $order_status = DB::table('order_status')
        ->get();
        
        return view('admin.order.edit',[
            'each' => $order,
            'order_status' => $order_status,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Order $order)
    {
        $id_order_status = $request->id_order_status;
        // dd($id_order_status);

        $order->update(
        [
            'id_order_status' => $id_order_status,
        ],
        $request->except([
            '_token',
            '_method',
        ])
        );
        return redirect()->route("ordermanagement.index")->with('message', 'Bạn đã cập nhật đơn hàng thành công!');
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
