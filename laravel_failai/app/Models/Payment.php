<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $amount
 * @property int $status_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Order $order
 * @property PaymentType $paymentType
 * @property Status $status
 */
class Payment extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'amount',
    ];
    protected $guarded=[
        'created_at',
        'updated_at',
        'status_id'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function paymentType()
    {
        return $this->belongsTo(PaymentType::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
