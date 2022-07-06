<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\ThongKe;


class ThongKeController extends Controller
{
    public function filter_by_date(Request $request)
    {
        $data = $request->all();

        $from_date = $data['from_date'];
        $to_date = $data['to_date'];

        $get = ThongKe::whereBetween('order_date',[$from_date,$to_date])->orderBy('order_date', 'ASC')->get();
        $chart_data[] = array();
        foreach ($get as $key => $v) {
            $chart_data[] = array(
                'period' => $v->order_date,
                'order' => $v->total_order,
                'sales' => $v->sales,
                'profit' => $v->profit,
                'quantity' => $v->quantity,
            );
        }

        echo $data = json_encode($chart_data);
    }

    public function dashboard_filter(Request $request){
        $data = $request->all();

        $dauthangnay = Carbon::now('Asia/Ho_Chi_Minh')->startOfMonth()->toDateString();
        $dau_thangtruoc = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->startOfMonth()->toDateString();
        $cuoi_thangtruoc = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->endOfMonth()->toDateString();

        $sub7days = Carbon::now('Asia/Ho_Chi_Minh')->subDays(7)->toDateString();
        $sub365days = Carbon::now('Asia/Ho_Chi_Minh')->subDays(365)->toDateString();

        $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

        if($data['dashboard_value'] == '7ngay')
        {
            $get = ThongKe::whereBetween('order_date',[$sub7days,$now])->orderBy('order_date', 'ASC')->get();
        }
        else if ($data['dashboard_value'] == 'thangtruoc')
        {
            $get = ThongKe::whereBetween('order_date',[$dau_thangtruoc,$cuoi_thangtruoc])->orderBy('order_date',
            'ASC')->get();
        }
        else if ($data['dashboard_value'] == 'thangnay')
        {
            $get = ThongKe::whereBetween('order_date',[$dauthangnay,$now])->orderBy('order_date',
                'ASC')->get();
        }
        else{
            $get = ThongKe::whereBetween('order_date',[$sub365days,$now])->orderBy('order_date',
            'ASC')->get();
        }
        foreach ($get as $key => $v) {
            $chart_data[] = array(
            'period' => $v->order_date,
            'order' => $v->total_order,
            'sales' => $v->sales,
            'profit' => $v->profit,
            'quantity' => $v->quantity,
            );
        }

        echo $data = json_encode($chart_data);
    }
}
