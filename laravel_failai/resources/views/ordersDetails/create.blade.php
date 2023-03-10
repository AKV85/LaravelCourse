<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <h1>OrderDetails kategorija</h1><br>
        <hr>
        <span>Sukurimo forma</span>
        <hr>
        <form action="{{route('ordersDetails.store')}}" method="post">

            @csrf

            <x-forms.inputs :model="$orderDetails ?? (new \App\Models\OrderDetails())"
                            fields="order_id, product_name, product_id, quantity, price, status_id"/>

            <div class="mb-6">

                <button
                    type="submit"
                    class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                >
                    Kurti
                </button>

                <a href="/ordersDetails" class="text-black ml-4"> Atgal </a>
            </div>
        </form>
    </x-card>
</x-layout>
