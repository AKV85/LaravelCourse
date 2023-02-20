<?php

namespace App\Managers;

use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Product;
use App\Models\User;

class CartManager
{
protected $user;
protected $cart;

public function __construct(User $user)
{
$this->user = $user;
$this->cart = $this->user->getLatestCart() ?? new Order();
}

public function addProductToCart(int $productId, int $quantity = 1)
{
$product = Product::findOrFail($productId);
$orderDetail = $this->cart->details()->where('product_id', $product->id)->first();

if ($orderDetail) {
// Jei pasirinktas produktas jau yra krepšelyje, padidinkite kiekį.
$orderDetail->quantity += $quantity;
$orderDetail->save();
} else {
// Jei pasirinktas produktas dar nėra krepšelyje, pridėkite jį.
$orderDetail = new OrderDetails();
$orderDetail->order_id = $this->cart->id;
$orderDetail->product_id = $product->id;
$orderDetail->product_name = $product->name;
$orderDetail->quantity = $quantity;
$orderDetail->price = $product->price;
$orderDetail->save();
}

return $this->cart;
}

public function getCart()
{
return $this->cart;
}
}
