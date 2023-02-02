<?php

use App\Models\Address;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Payment;
use App\Models\Person;
use App\Models\Product;
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


Route::get('/product/{id}', function ($id) {
    $product = Product::firstOrCreate(
        [
            'id' => $id
        ],
        [
            'name' => 'Londonas to Paris',
            'category_id' => 5,
            'price' => 1000,
            'status_id' => 5,
            'slug' => 'london-to-parisasdfgh',
            'description' => 'London to Paris',
            'image' => 'london-to-paris.jpg',
            'color' => 'red',
            'size' => 'XL'
        ]
    );

    return $product;
});


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
