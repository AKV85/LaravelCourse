<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller

{

    public function index()
    {
        return Order::query()->with(['user','shippingAddress',
            'billingAddress','payment','status'])->get();
    }
    public function create()
    {
        return view('orders.create');
    }
    public function store(Request $request)
    {
        $order = Order::create($request->all());
        return redirect()->route('orders.show',$order);
    }
    public function show(Order $order)
    {
        return $order;
    }
    public function edit(Order $order)
    {
        return view('orders.edit',compact('order'));
    }
    public function update(Request $request, Order $order)
    {
        $order->update($request->all());
        return redirect()->route('orders.show',$order);
    }
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index');
    }
}

