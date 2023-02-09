<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <h1>payments</h1><br>
        <hr>
        <span>Sukurimo forma</span>
        <hr>
        <form action="{{route('payments.store')}}" method="post">

            @csrf
            <div class="mb-6">
                <label
                    for="order_id"
                    class="inline-block text-lg mb-2">
                    order_id
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="order_id"
                    value="{{old('order_id')}}"
                />

                @error('order_id')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="payment_type_id" class="inline-block text-lg mb-2">
                    payment_type_id
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="payment_type_id"
                    placeholder="Pvz: ...."
                    value="{{old('payment_type_id')}}"
                />

                @error('payment_type_id')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="amount"
                    class="inline-block text-lg mb-2"
                >amount</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="amount"
                    placeholder="Pvz: ....."
                    value="{{old('amount')}}"                    />

                @error('amount')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="status_id" class="inline-block text-lg mb-2">
                    status_id
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="status_id"
                    placeholder="Pvz: ..."
                    value="{{old('status_id')}}"                    />

                @error('status_id')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>


            <div class="mb-6">

                <button
                    type="submit"
                    class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                >
                    Kurti
                </button>

                <a href="/payments" class="text-black ml-4"> Atgal </a>
            </div>
        </form>
    </x-card>
</x-layout>
