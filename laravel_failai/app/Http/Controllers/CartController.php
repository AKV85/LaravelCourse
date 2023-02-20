<?php

namespace App\Http\Controllers;

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
//    public function create(CartRequest $request)
//    {
//        $manager = new OrderDetails(); // Suemuliavau OrderDetail Managerį
//
//        $duomenys = $request->all();
//        /** @var User $user */
//        $user     = auth()->user();         // Siuo metu prisijunges vartotojas
//
//        // Paimame vartotojo paskutinį krepšelį ir priskiriam i masyva saugojimui
//        $duomenys['order_id']     = $user->getLatestCart()->id;
//        $product                  = Product::find($request->product_id);
//        $duomenys['product_name'] = $product->name;    // Paimame produkto pavadinima ir priskiriam i masyva saugojimui
//        $duomenys['price']        = $product->price;   // Paimame produkto kaina ir priskiriam i masyva saugojimui
//
//        $manager->create($duomenys); // Sukuriu naują OrderDetail įrašą
//
//        return redirect()->back()->with('success', __('messages.product_added_to_cart'));
//    }
    public function index()
    {
        $user = auth()->user();
        $cart = $user->getLatestCart();
        return view('cart.index', compact('cart'));
    }


    public function create(CartRequest $request)
    {
        /** @var User $user */
        $user = auth()->user(); // Siuo metu prisijunges vartotojas

        // Patikrinkite, ar vartotojas turi krepšelį.
        $cart = $user->getLatestCart();

        if (!$cart) {
            // Jei vartotojas neturi krepšelio, sukurkite naują krepšelį.
            $cart = new Order();
            $cart->user_id = $user->id;
            $cart->save();
        }

        $product = Product::find($request->product_id);
        $orderDetail = $cart->details()->where('product_id', $product->id)->first();

        if ($orderDetail) {
            // Jei pasirinktas produktas jau yra krepšelyje, padidinkite kiekį.
            $orderDetail->quantity += $request->quantity;
            $orderDetail->save();
        } else {
            // Jei pasirinktas produktas dar nėra krepšelyje, pridėkite jį.
            $orderDetail = new OrderDetails();
            $orderDetail->order_id = $cart->id;
            $orderDetail->product_id = $product->id;
            $orderDetail->product_name = $product->name;
            $orderDetail->quantity = $request->quantity;
            $orderDetail->price = $product->price;
            $orderDetail->save();
        }

        return redirect()->route('cart.index');
//        return redirect()->back()->with('success', __('messages.product_added_to_cart'));
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
}
