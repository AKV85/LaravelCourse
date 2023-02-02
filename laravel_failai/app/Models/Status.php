<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $type
 * @property Carbon $created_at
 * @property Carbon updated_at
 */
class Status extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'type'
    ];

    protected $guarded = [
        'created_at',
        'updated_at'
    ];
}