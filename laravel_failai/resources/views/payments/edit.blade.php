<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <h1>Atnaujinti {{$payment->order_id}}</h1><br>
        <hr>

        <span>Redagavimo forma</span>
        <hr>
        <form action="{{route('payments.update', $payment->id)}}" method="post">
            @method('PUT')
            @csrf

            <x-forms.inputs :model="$payment ?? (new \App\Models\Payment())"
                            fields="order_id, payment_type, amount, status_id"/>

            <div class="mb-6">

                <button
                    type="submit"
                    class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                >
                    Atnaujinti
                </button>

                <a href="/payments" class="text-black ml-4"> Atgal </a>
            </div>
        </form>
    </x-card>
</x-layout>
