<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Managers\ProductManager;
use App\Models\Product;

class ProductsController extends Controller
{
 public function __construct(protected ProductManager $manager)
{
}

    public function index()
    {
        $products = Product::query()->with(['category', 'status'])->get();

        return view('products.index',['products'=>Product::orderBy("id")->paginate(5)]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(ProductRequest $request)
    {
        $product = Product::create($request->all());

        // Tikriname, ar užklausa turi failą ir ar jis yra validus paveikslėlio failas
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Įkeliame failą į'public_html/img/products' aplanką
            $image = $request->file('image');
            //gauname pav.pavadinima
            $clientOriginalName = $image->getClientOriginalName();
            //atlieka pav.perkelima i public image/products kataloga
            $image->move(public_path('img/products'), $clientOriginalName);
            //suta kodo dalis atsakinga uz paveikslelio issaugojima produkto lenteleje
            $product->image = '/img/products/'. $clientOriginalName;
            $product->save();}

        return redirect()->route('products.show', $product);
    }

    public function show(Product $product)
    {
        return view('products.show', ['product' => $product]);
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(ProductRequest $request, Product $product)
    {

        $product->update($request->all());

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Įkeliame failą į'public_html/img/products' aplanką
            $image = $request->file('image');
            //gauname pav.pavadinima
            $clientOriginalName = $image->getClientOriginalName();
            //atlieka pav.perkelima i public image/products kataloga
            $image->move(public_path('img/products'), $clientOriginalName);
            //suta kodo dalis atsakinga uz paveikslelio issaugojima produkto lenteleje
            $product->image = '/img/products/'. $clientOriginalName;
            $product->save();}

        return redirect()->route('products.show', $product);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
