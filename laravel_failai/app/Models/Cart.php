<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Cart extends Model
{
use HasFactory;

protected $fillable = [
'user_id',
];

public function products()
{
return $this->belongsToMany(Product::class)->withPivot('quantity');
}

public function addProduct(Product $product, int $quantity = 1)
{
$currentQuantity = $this->products()->where('product_id', $product->id)->sum('quantity');

$this->products()->syncWithoutDetaching([
$product->id => ['quantity' => $currentQuantity + $quantity]
]);

return $this;
}

public function removeProduct(Product $product)
{
$this->products()->detach($product->id);

return $this;
}

public function updateProductQuantity(Product $product, int $quantity)
{
if ($quantity <= 0) {
$this->removeProduct($product);
} else {
$this->products()->updateExistingPivot($product->id, ['quantity' => $quantity]);
}

return $this;
}

public function getTotalPriceAttribute()
{
$totalPrice = 0;

foreach ($this->products as $product) {
$totalPrice += $product->price * $product->pivot->quantity;
}

return $totalPrice;
}

public function user()
{
return $this->belongsTo(User::class);
}
}
