<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetails;

class OrderSummaryController extends Controller
{
    public function index()
    {
        $orderSummaries = OrderDetails::select('order_id', \DB::raw('SUM(total_price) as total_price'))
            ->groupBy('order_id')
            ->get();

        return view('ordersummary', ['orderSummaries' => $orderSummaries]);
    }
}
