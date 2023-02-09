<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <div class="card">
            <div class="card-image">
                <img src="https://picsum.photos/300" alt="img">
                <span class="card-title">{{ $order->name }}</span>
            </div>
            <div class="card-content">
                <div>ID: {{$order->id}}</div>
                <p>shipping_address: {{ $order->shipping_address }}</p>
                <p>billing_address: {{ $order->billing_address }}</p>
                <p>payment_id: {{ $order->payment_id }}</p>
                <p>status_id: {{ $order->status_id }}</p>
                <p>Creation date: {{ $order->created_at }}</p>
                <p>Last updated: {{ $order->updated_at }}</p>
            </div>
            <div class="card-action">
                <nav class="flex justify-between items-center mb-4">
                    <a href="/orders" class="text-black ml-4"> Atgal </a>

                    <ul class="flex space-x-6 mr-6 text-lg">
                        <li>
                            <button
                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                                <a href="{{route('orders.edit', $order->id)}}"
                                   class="btn btn-primary"> Redaguoti
                                </a>
                            </button>
                        </li>
                        <li>
                            <form action="{{route('orders.destroy', $order->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button
                                    type="submit"
                                    class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                                > Pasalinti
                                </button>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

    </x-card>
</x-layout>

