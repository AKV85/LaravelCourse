<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property string $image
 * @property int $status_id
 * @property int $parent_id
 * @property int $sort_order
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Status $status
 * @property Parent $parent
 *
 */
class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'status_id',
        'parent_id',
        'sort_order'
    ];

    protected $guarded = [
        'created_at',
        'updated_at'
    ];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function parent()
    {
        return $this->belongsTo(Parent::class);
    }
}
