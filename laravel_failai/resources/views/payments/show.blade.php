<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <div class="card">
            <div class="card-image">
                <img src="https://picsum.photos/300" alt="img">
                <span class="card-title">{{ $payment->order_id }}</span>
            </div>
            <div class="card-content">
                <div>ID: {{$payment->id}}</div>
                <p>order_id: {{ $payment->order_id }}</p>
                <p>payment_type_id: {{ $payment->payment_type_id }}</p>
                <p>amount: {{ $payment->amount }}</p>
                <p>status_id: {{ $payment->status_id }}</p>
                <p>Creation date: {{ $payment->created_at }}</p>
                <p>Last updated: {{ $payment->updated_at }}</p>
            </div>
            <div class="card-action">
                <nav class="flex justify-between items-center mb-4">
                    <a href="/payments" class="text-black ml-4"> Atgal </a>

                    <ul class="flex space-x-6 mr-6 text-lg">
                        <li>
                            <button
                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                                <a href="{{route('payments.edit', $payment->id)}}"
                                   class="btn btn-primary"> Redaguoti
                                </a>
                            </button>
                        </li>
                        <li>
                            <form action="{{route('payments.destroy', $payment->id)}}" method="post">
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

