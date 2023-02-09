<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <h1>Atnaujinti {{$order->name}}</h1><br><hr>

        <span>Redagavimo forma</span><hr>
        <form action="{{route('orders.update', $order->id)}}" method="post">
            @method('PUT')
            @csrf
            <div class="mb-6">
                <label
                    for="user_id"
                    class="inline-block text-lg mb-2">
                 user_id
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="user_id"
                    value="{{$order->user_id}}"
                />

                @error('user_id')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="shipping_address" class="inline-block text-lg mb-2"
                >shipping_address
                </label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="shipping_address"
                    placeholder="Pvz: ...."
                    value="{{$order->shipping_address}}"
                />

                @error('shipping_address')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="billing_address"
                    class="inline-block text-lg mb-2"
                >billing_address</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="billing_address"
                    placeholder="Pvz: ....."
                    value="{{$order->billing_address}}"                    />

                @error('billing_address')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="payment_id" class="inline-block text-lg mb-2"
                >payment_id</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="payment_id"
                    value="{{$order->payment_id}}"                    />

                @error('payment_id')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="status_id"
                    class="inline-block text-lg mb-2"
                >
                    status_id
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="status_id"
                    value="{{$order->status_id}} "                   />

                @error('status_id')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>



            <div class="mb-6">

                <button
                    type="submit"
                    class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                >
                    Atnaujinti
                </button>

                <a href="/orders" class="text-black ml-4"> Atgal </a>
            </div>
        </form>
    </x-card>
</x-layout>
