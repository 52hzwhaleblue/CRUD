<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use App\Models\OrderDetails;

class OrderController extends Controller
{

    public function index(OrderDetails $orderDetails)
    {
        // Lấy order mới đặt
        $orders_moidat = DB::table('orders')
        ->Where('id_user', auth()->user()->id)
        ->where('id_order_status',1)
        ->get();

        // Lấy order xác nhận
        $orders_xacnhan = DB::table('orders')
        ->Where('id_user', auth()->user()->id)
        ->where('id_order_status',2)
        ->get();

        // Lấy order đang giao hàng
        $orders_dangiaohang = DB::table('orders')
        ->Where('id_user', auth()->user()->id)
        ->where('id_order_status',3)
        ->get();

        // Lấy order đã giao
        $orders_dagiao = DB::table('orders')
        ->Where('id_user', auth()->user()->id)
        ->where('id_order_status',4)
        ->get();

        // Lấy order đã hủy
        $orders_dagiao = DB::table('orders')
        ->Where('id_user', auth()->user()->id)
        ->where('id_order_status',5)
        ->get();

        if(!$orders_moidat->isEmpty())
        {
            // Lấy order_details mới đặt
            $orderDetails_moidat = DB::table('order_details')
            ->Where('id_order', $orders_moidat[0]->id)
            ->get();

            return view('user.order.index',[
                'orderDetails_moidat' => $orderDetails_moidat,
            ]);
        }

        if(!$orders_xacnhan->isEmpty())
        {
            // Lấy order_details xác nhận
            $orderDetails_xacnhan = DB::table('order_details')
            ->Where('id_order', $orders_xacnhan[0]->id)
            ->get();

            return view('user.order.index',[
            'orderDetails_xacnhan' => $orderDetails_xacnhan,
            ]);
        }

        if(!$orders_dangiaohang->isEmpty())
        {
        // Lấy order_details đang giao hàng
        $orderDetails_danggiaohang = DB::table('order_details')
        ->Where('id_order', $orders_dangiaohang[0]->id)
        ->get();

        return view('user.order.index',[
        'orderDetails_danggiaohang' => $orderDetails_danggiaohang,
        ]);
        }

        if(!$orders_dagiao->isEmpty())
        {
        // Lấy order_details đã giao
        $orderDetails_dagiao = DB::table('order_details')
        ->Where('id_order', $orders_dagiao[0]->id)
        ->get();

        return view('user.order.index',[
        'orderDetails_dagiao' => $orderDetails_dagiao,
        ]);
        }

        if(!$orders_dahuy->isEmpty())
        {
        // Lấy order_details đã hủy
        $orderDetails_dahuy = DB::table('order_details')
        ->Where('id_order', $orders_dahuy[0]->id)
        ->get();

        return view('user.order.index',[
        'orderDetails_dahuy' => $orderDetails_dahuy,
        ]);
        }

        return view('user.order.index');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $orders = DB::table('orders')
        ->get();

        if($orders->isEmpty()){
            $order = new Order;
            $order_id = (auth()->user()->id).''.Date('Ymd');
            $order->id = $order_id;
            $order->id_user = auth()->user()->id;
            $order->address =auth()->user()->address;
            $order->phone = auth()->user()->phone;
            $order->email = auth()->user()->email;
            $order->fullname = auth()->user()->name;
            $order->id_order_status = 1;
            $order->id_payment_method = 1;
            $order->save();

            $orderDetail = new OrderDetails;
            $orderDetail->id_order = $order_id;
            $orderDetail->id_prod = $request->get('id_prod');
            $orderDetail->photo = $request->get('photo');
            $orderDetail->name = $request->get('name');
            $orderDetail->sale_price = $request->get('sale_price');
            $orderDetail->regular_price = $request->get('regular_price');
            $orderDetail->quantity = $request->get('quantity');
            $orderDetail->temp_price = $request->get('temp_price');
            $orderDetail->save();
        }
        else{
        foreach($orders as $k => $v ){
            if((auth()->user()->id) == ($v->id_user) )
            {
                $orderDetail = new OrderDetails;
                $orderDetail->id_order = $v->id;
                $orderDetail->id_prod = $request->get('id_prod');
                $orderDetail->photo = $request->get('photo');
                $orderDetail->name = $request->get('name');
                $orderDetail->sale_price = $request->get('sale_price');
                $orderDetail->regular_price = $request->get('regular_price');
                $orderDetail->quantity = $request->get('quantity');
                $orderDetail->temp_price = $request->get('temp_price');
                $orderDetail->save();
            }
            else
            {
                $order = new Order;
                $order_id = (auth()->user()->id).''.Date('Ymd');
                $order->id = $order_id;
                $order->id_user = auth()->user()->id;
                $order->address =auth()->user()->address;
                $order->phone = auth()->user()->phone;
                $order->email = auth()->user()->email;
                $order->fullname = auth()->user()->name;
                $order->id_order_status = 1;
                $order->id_payment_method = 1;
                $order->save();

                $orderDetail = new OrderDetails;
                $orderDetail->id_order = $order_id;
                $orderDetail->id_prod = $request->get('id_prod');
                $orderDetail->photo = $request->get('photo');
                $orderDetail->name = $request->get('name');
                $orderDetail->sale_price = $request->get('sale_price');
                $orderDetail->regular_price = $request->get('regular_price');
                $orderDetail->quantity = $request->get('quantity');
                $orderDetail->temp_price = $request->get('temp_price');
                $orderDetail->save();
            }
        }
    }

    return redirect()->back();
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
