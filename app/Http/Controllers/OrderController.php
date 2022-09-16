<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        if(auth()->user()->hasRole('ADMIN')){
            $orders = Order::with('user')->get();
        }else{
            $orders = auth()->user()->orders;
        }
        return view("Public.Orders.Index", compact("orders"));
    }

    public function store(CreateOrderRequest $request)
    {
        $orderValidated = $request->validated();

        $order = auth()->user()->orders()->create($orderValidated);

        return redirect()->route("orders.index")->with('success', 'Order saved');;
    }

    public function show(Order $order)
    {
        return view("Public.Orders.Show", compact("order"));
    }
}
