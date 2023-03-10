<?php

namespace App\Managers;

use App\Models\Order;
use Illuminate\Database\Eloquent\Collection;

class OrderManager
{
    public function getByStatus(int $statusId): Collection
    {
        return Order::where('status_id', $statusId)->get();
    }
}
