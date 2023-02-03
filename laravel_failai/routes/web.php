<?php

use App\Http\Controllers\ProductsController;
use App\Models\Address;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Payment;
use App\Models\Person;
use App\Models\Product;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/product/new', function () {

    $forma = '
        <form action="/product" method="POST">
            <input type="text" name="inputas1">
            <input type="text" name="inputas2">
            <input type="submit" value="SEND">
        </form>
    ';

    return $forma;
});


Route::get('/products', [ProductsController::class, 'index']);
Route::get('/product/create', [ProductsController::class, 'create']);
Route::post('/product', [ProductsController::class, 'store']);
Route::get('/product/{product}', [ProductsController::class, 'show']);
Route::get('/product/edit', [ProductsController::class, 'edit']);
Route::put('/product/{product}', [ProductsController::class, 'update']);
Route::delete('/product/{product}', [ProductsController::class, 'destroy']);



Route::get('/addresses', function () {
    return Address::query()->with(['user'])->get();
});

Route::get('/categories', function () {
    return Category::query()->with(['status'/**,'parent'*/])->get();
});

Route::get('/orderDetails', function () {
    return OrderDetails::query()->with(['order','product','status'])->get();
});

Route::get('/orders', function () {
    return Order::query()->with(['user','shippingAddress','billingAddress','payment','status'])->get();
});

Route::get('/payments', function () {
    return Payment::query()->with(['order','paymentType','status'])->get();
});

Route::get('/people', function () {
    return Person::query()->with(['user','address'])->get();
});

Route::get('/products', function () {
    return Product::query()->with(['category','status'])->get();
});

Route::post('/product', function (Request $request) {
    return $request->all();
});

Route::get('/products-del', function () {
    return Product::all()->map(function ($product) {
        $product->delete();
    });
});

Route::get('/new-product', function () {

    $duomenys = [
        'name' => 'Apple',
        'category_id' => 5,
        'price' => 1000,
        'status_id' => 5,
        'slug' => 'apple',
        'description' => 'Mmmm..',
        'image' => 'london-to-paris.jpg',
        'color' => 'red',
        'size' => 'XL',
    ];

    $product  = Product::create($duomenys);

    dd($product);

});

Route::get('/order/{order}', function (Order $order) {
    return $order->products;
});
