<x-layout>
    @include('partials._hero')
    @include('partials._search')
    <x-card class="p-2 max-w-xl mx-auto mt-24">
        {{--    <div class="row">--}}
        {{--        <div class="col s12">--}}
        <hr>
        <p class="text-center text-xxl-center">Uzsakymai</p><br>
        <hr>
        <a
            href="{{route('orders.create')}}"
            class="absolute top-3/3 right-10 bg-black text-white
                  py-2 px-5">
            Kurti nauja uzsakyma
        </a>
        <table class="table-auto">
            <thead>
            <tr>
                <th>ID</th>
                <th>paveiksliukas</th>
                <th>User ID</th>
                <th>Shipping_address</th>
                <th>payment_id</th>
                <th>status_id</th>
                <th>Veiksmai</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)

                <tr>
                    <td><h3 class="text-2xl">
                            {{$order->id}}
                        </h3></td>
                    <td><img class="hidden w-48 mr-6 md:block"
                             src="https://picsum.photos/50"
                             alt="image"/></td>
                    <td><h3 class="text-2xl">
                            <a href="/orders/{{$order->id}}">
                                {{$order->user_id}}</a>
                        </h3>
                    </td>
                    <td class="text-center">
                        <div class="text-xl font-bold mb-4">
                            {{$order->shipping_address}}
                        </div>
                    </td>
                    <td><h3 class="text-2xl">
                            {{$order->payment_id}}
                        </h3></td>
                    <td><h3 class="text-2xl">
                            {{$order->status_id}}
                        </h3></td>
                    <td class="text-right">
                        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                            <a href="{{route('orders.edit', $order->id)}}"
                               class="btn btn-primary">Redaguoti
                            </a>
                        </button>
                        <form action="{{route('orders.destroy', $order->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button
                                type="submit"
                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                            > Pašalinti
                            </button>

                        </form>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
        <hr>
    </x-card>
</x-layout>
