<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ThongKe;


class ThongKeController extends Controller
{
    public function thongke_theongay(Request $request)
    {
        $data = $request->all();

        $from_date = $data['from_date'];
        $to_date = $data['to_date'];

        $get = ThongKe::whereBetween('order_date',[$from_date,$to_date])->orderBy('order_date', 'ASC')->get();
 $aaa[] = array();
        foreach ($get as $key => $v) {
            $aaa[] = array(
                'period' => $v->order_date,
                'order' => $v->total_order,
                'sales' => $v->sales,
                'profit' => $v->profit,
                'quantity' => $v->quantity,
            );
        }

        echo $data = json_encode($aaa);
    }
}
