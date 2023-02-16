<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Managers\OrderManager;
use App\Models\Order;
use App\Models\Status;


class OrderController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Order::class,'order');
    }
    public function index()
    {
        $orders = Order::query()->with(['user','shippingAddress',
            'billingAddress','payment','status'])->get();
        return view('orders.index',['orders'=>Order::orderBy("id")->paginate(6)]);
    }
    public function create()
    {
        return view('orders.create');
    }
    public function store(OrderRequest $request)
    {
        $order = Order::create($request->all());
        return redirect()->route('orders.show',$order);
    }
    public function show(Order $order)
    {
        return view('orders.show', ['order' => $order]);
    }
    public function edit(Order $order)
    {
        return view('orders.edit',compact('order'));
    }
    public function update(OrderRequest $request, Order $order)
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

