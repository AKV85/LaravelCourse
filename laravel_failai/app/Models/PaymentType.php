<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * @package App\Models
 *
 * @property int $id
 * @property string $name
 * @property $created_at
 * @property $updated_at
 */
class PaymentType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
}
