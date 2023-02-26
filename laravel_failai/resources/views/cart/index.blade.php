<x-layout>
    @include('partials._hero')
    @include('partials._search')

    <h1>Krepšelis</h1>

    @if($cart)
        <table>
            <thead>
            <tr>
                <th>Produktas</th>
                <th>Kiekis</th>
                <th>Kaina</th>
                <th>Bendra kaina</th>
                <th>Veiksmai</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cart?->details as $cartItem)
                <tr>
                    <td>{{ $cartItem->product_name }}</td>
                    <td>{{ $cartItem->quantity }}</td>
                    <td>{{ $cartItem->price }}</td>
                    <td>{{ $cartItem->total_price }}</td>

                    <td>
                        {{--
                        {{--                        <form action="{{route('product.add_to_cart')}}" method="POST">--}}
                        {{--                            <input type="hidden" name="product_id" value="{{ $cartItem->product_id }}">--}}
                        {{--                            <input type="number" name="quantity" value="1">--}}
                        {{--                            <x-primary-button type="submit">I krepseli</x-primary-button>--}}
                        {{--                            @csrf--}}
                        {{--                        </form>--}}
                        {{--                        <form action="{{ route('product.remove_from_cart') }}" method="POST">--}}
                        {{--                            @csrf--}}
                        {{--                            <input type="hidden" name="product_id" value="{{ $cartItem->product_id }}">--}}
                        {{--                            <input type="number" name="quantity" value="1">--}}
                        {{--                            <x-primary-button type="submit">Nuimti</x-primary-button>--}}
                        {{--                        </form>--}}
                        <form action="{{ route('cart.product_update', $cartItem->product) }}" method="POST">
                            @csrf
                            <input type="text" placeholder="0" name="quantity" value="{{ $cartItem->quantity }}">
                            <x-primary-button type="submit">Atnaujinti</x-primary-button>
                        </form>
                        <form action="{{route('cart.product_remove', ['product' => $cartItem->product_id])}}"
                              method="post">
                            @csrf
                            @method('DELETE')
                            <x-primary-button
                                type="submit"
                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                            > Pašalinti
                            </x-primary-button>

                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{--        <form action="{{ route('cart.place_order') }}" method="POST">--}}
        {{--            @csrf--}}
        {{--            <button type="submit">Užsakyti</button>--}}
        {{--        </form>--}}
    @else
        <p>Jūsų krepšelis yra tuščias.</p>
    @endif

</x-layout>
