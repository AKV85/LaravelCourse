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
                <th>Veiksmai</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cart->details as $detail)
                <tr>
                    <td>{{ $detail->product_name }}</td>
                    <td>{{ $detail->quantity }}</td>
                    <td>{{ $detail->price }}</td>
                    <td>
{{--                        <form action="{{ route('cart.remove_product') }}" method="POST">--}}
{{--                            @csrf--}}
{{--                            <input type="hidden" name="product_id" value="{{ $detail->product_id }}">--}}
{{--                            <input type="number" name="quantity" value="1">--}}
{{--                            <button type="submit">Nuimti</button>--}}
{{--                        </form>--}}
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
