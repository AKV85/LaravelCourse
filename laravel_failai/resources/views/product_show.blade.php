@include('partials._hero')
<x-app-layout>


Pavadinimas: {{ $product->name }}<br>
Kategorija: {{ $product->category }}<br>
Aprašymas: {{ $product->description }}<br>
Spalva: {{ $product->color }}<br>
Dydis: {{ $product->size }}<br>
Kaina: {{ $product->price }}<br>
<br>


    <form action="{{route('product.add_to_cart')}}" method="POST">
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <input type="number" name="quantity" value="1">
        <x-primary-button type="submit">I krepseli</x-primary-button>
        @csrf
    </form>
</x-app-layout>
