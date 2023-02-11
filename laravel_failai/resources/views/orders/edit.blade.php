<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <h1>Atnaujinti {{$order->name}}</h1><br><hr>

        <span>Redagavimo forma</span><hr>
        <form action="{{route('orders.update', $order->id)}}" method="post">
            @method('PUT')
            @csrf

            <x-forms.inputs :model="$order ?? (new \App\Models\Order())"
                            fields="user_id, shipping_address_id, billing_address_id, payment_id, status_id"/>

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
