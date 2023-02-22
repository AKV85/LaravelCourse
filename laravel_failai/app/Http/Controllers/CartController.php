<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartProductUpdateRequest;
use App\Http\Requests\CartRequest;
use App\Http\Requests\RemoveProductFromCartRequest;
use App\Managers\CartManager;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Product;
use App\Models\Status;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{

    public function __construct(private readonly CartManager $manager)
    {
    }


    public function sukurtiUzsakyma(Request $request)
    {
        $cart = new Order();
        $cart->user_id = auth::user()->id;
        $cart->status = Order::STATUS_NEW;
        $cart->billing_address_id = $request->billing_address_id;
        $cart->shipping_address_id = $request->shipping_address_id;
        $cart->save();

        foreach ($request->cartItems as $cartItem) {
            $this->manager->addToCart($cartItem);
        }

        return redirect()->back()->with('success', __('messages.product_added_to_cart'));
    }

    public function index()
    {
        $user = auth()->user();
        $cart = $user->getLatestCart();
        return view('cart.index', compact('cart'));
    }

    public function create(CartRequest $request)
    {
        $this->manager->addToCart($request);

        return redirect()->back()->with('success', __('messages.product_added_to_cart'));
    }


    public function removeProduct(RemoveProductFromCartRequest $request)
    {
        $user = auth()->user();
        $cart = $user->getLatestCart();
        $product = Product::find($request->product_id);
        $orderDetail = $cart->details()->where('product_id', $product->id)->first();

        if ($orderDetail) {
            $orderDetail->quantity -= $request->quantity;

            if ($orderDetail->quantity <= 0) {
                $orderDetail->delete();
            } else {
                $orderDetail->save();
            }
        }

        return redirect()->route('cart.index');
    }

    public function update(CartProductUpdateRequest $request, Product $product)
    {
        $this->manager->changeQuantity($product, $request->quantity);

        return redirect()->back()->with('success', __('messages.cart_updated', ['product' => $product->name]));
    }

    public function destroy(Product $product)
    {
        $this->manager->removeFromCart($product);

        return redirect()->back()->with('success', __('messages.product_removed_from_cart', ['product' => $product->name]));
    }


}
