<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view("Public.Orders.Index", compact("orders"));
    }

    public function store(Request $request)
    {
        $orderVaidated = $request->validate([
            'customer_name' => 'required',
            'customer_email' => 'required',
            'customer_mobile' => 'required',
        ]);
        $order = Order::create($orderVaidated);

        return redirect()->route("orders.index")->with('success', 'Order saved');;
    }

    public function show(Order $order)
    {
        return view("Public.Orders.Show", compact("order"));
    }
}
