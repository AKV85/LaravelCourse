<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <h1>OrderDetails kategorija</h1><br>
        <hr>
        <span>Sukurimo forma</span>
        <hr>
        <form action="{{route('ordersDetails.store')}}" method="post">

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
                <label for="product_name" class="inline-block text-lg mb-2">
                    product_name
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="product_name"
                    placeholder="Pvz: ...."
                    value="{{old('product_name')}}"
                />

                @error('product_name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="product_id"
                    class="inline-block text-lg mb-2"
                >product_id</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="product_id"
                    placeholder="Pvz: ....."
                    value="{{old('product_id')}}"                    />

                @error('product_id')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="quantity" class="inline-block text-lg mb-2"
                >quantity</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="quantity"
                    value="{{old('quantity')}}"                    />

                @error('quantity')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

{{--            <div class="mb-6">--}}
{{--                <label--}}
{{--                    for="price"--}}
{{--                    class="inline-block text-lg mb-2"--}}
{{--                >--}}
{{--                    price--}}
{{--                </label>--}}
{{--                <input--}}
{{--                    type="text"--}}
{{--                    class="border border-gray-200 rounded p-2 w-full"--}}
{{--                    name="price"--}}
{{--                    value="{{old('price')}} "                   />--}}

{{--                @error('price')--}}
{{--                <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
{{--                @enderror--}}
{{--            </div>--}}

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

                <a href="/ordersDetails" class="text-black ml-4"> Atgal </a>
            </div>
        </form>
    </x-card>
</x-layout>
