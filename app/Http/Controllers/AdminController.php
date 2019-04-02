<?php

namespace App\Http\Controllers;

use App\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $todays_orders = Order::whereDate('created_at', Carbon::today())->get()->count();
        $todays_amt = Order::whereDate('created_at', Carbon::today())->sum('total_amount');
        $paid_orders = Order::whereDate('created_at', Carbon::today())->where('payment_status', '=', 1)->get()->count();
        $unpaid_orders = Order::whereDate('created_at', Carbon::today())->where('payment_status', '=', 0)->get()->count();
        $delivered_orders = Order::whereDate('created_at', Carbon::today())->where('status', '=', 1)->get()->count();
        $undelivered_orders = Order::whereDate('created_at', Carbon::today())->where('status', '=', 0)->get()->count();
        $total_orders = Order::count();
        $total_revenue = Order::sum('total_amount');

//        dd($todays_amt);

        return view('dashboard', compact('todays_orders', 'todays_amt', 'paid_orders',
            'unpaid_orders', 'delivered_orders', 'undelivered_orders', 'total_orders', 'total_revenue'));

    }

    public function orders() {

        $orders = Order::orderBy('created_at', 'desc')->get();

        return view('admin.orders.index', compact('orders'));

    }

    public function orders_pay($id) {

        $order = Order::find($id);
        $order->payment_status = 1;
        $order->save();

        return redirect()->back();

    }

    public function orders_deliver($id) {

        $order = Order::find($id);
        $order->status = 1;
        $order->save();

        return redirect()->back();

    }

    public function reports() {

        return view('admin.reports');

    }

    public function generate_report(Request $request) {

        $from_date = $request->from_date;
        $to_date = $request->to_date;

        $f = new \DateTime($request->from_date);
        $t = new \DateTime($request->to_date);

//        $date = Carbon::parse('Y-m-d', $from_date);


        $orders = Order::whereBetween('created_at', array($f, $t))->get();
        $orders_total = Order::whereBetween('created_at', array($f, $t))->sum('total_amount');

//        dd($orders);
        return view('admin.generate', compact('orders', 'orders_total', 'from_date', 'to_date'));

    }

}
