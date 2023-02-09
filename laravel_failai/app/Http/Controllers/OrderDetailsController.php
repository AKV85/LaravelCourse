<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderDetailsRequest;
use App\Managers\OrderDetailsManager;
use App\Models\OrderDetails;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderDetailsController extends Controller
{
    public function __construct(protected OrderDetailsManager $manager)
    {
    }

    public function index()
    {
        $ordersDetails = OrderDetails::query()->with(['order', 'product', 'status'])->get();

        return view('ordersDetails.index', compact('ordersDetails'));
    }

    public function create()
    {
        return view('ordersDetails.create');
    }

    public function store(OrderDetailsRequest $request)
    {
        $orderDetails = OrderDetails::create($request->all());
        return redirect()->route('ordersDetails.show', $orderDetails);
    }

    public function show(OrderDetails $orderDetails)
    {
        return view('ordersDetails.show', ['orderDetails' => $orderDetails]);
    }

    public function edit(OrderDetails $orderDetails)
    {
        return view('ordersDetails.edit', compact('orderDetails'));
    }

    public function update(OrderDetailsRequest $request, OrderDetails $orderDetails)
    {

        $orderDetails->update($request->all());
        return redirect()->route('ordersDetails.show', $orderDetails);
    }

    public function destroy(OrderDetails $orderDetails)
    {
        $orderDetails->delete();
        return redirect()->route('ordersDetails.index');
    }
}
