<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $shipping_address_id
 * @property int $billing_address_id
 * @property int $payment_id
 * @property int $status_id
 * @property Carbon $created_at
 * @property Carbon updated_at
 */
class Order extends Model
{
    use HasFactory;
    protected $fillable = [

        'shipping_address_id',
        'billing_address_id'
    ];

    protected $guarded = [
        'user_id',
        'created_at',
        'updated_at',
        'payment_id',
        'status_id'
    ];

}
