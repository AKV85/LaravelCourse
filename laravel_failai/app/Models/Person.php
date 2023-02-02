<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $personal_code
 * @property string $email
 * @property string $phone
 * @property int $user_id
 * @property int $address_id
 * @property Carbon $created_at
 * @property Carbon updated_at
 */
class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'personal_code',
        'email',
        'phone',
    ];
    protected $guarded=[
        'created_at',
        'updated_at',
        'user_id',
        'address_id'
    ];
}
