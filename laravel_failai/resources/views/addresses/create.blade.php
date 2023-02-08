<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <h1>Kurti adresa</h1><br>
        <hr>
        <span>Sukurimo forma</span>
        <hr>
        <form action="{{route('addresses.store')}}" method="post">
            @csrf
            <div class="mb-6">
            <label
                for="name"
                class="inline-block text-lg mb-2">
                Salies kodas
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="name"
                value="{{old('name')}}"
            />

            @error('name')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
            </div>

            <div class="mb-6">
                <label for="country"
                       class="inline-block text-lg mb-2">
                    Salis
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="country"
                    placeholder="Pvz: ...."
                    value="{{old('country')}}"
                />

                @error('country')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div>
            <div class="mb-6">
                <label
                    for="city"
                    class="inline-block text-lg mb-2"
                >Miestas</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="city"
                    placeholder="Pvz: ....."
                    value="{{old('city')}}"                    />

                @error('city')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="zip"
                    class="inline-block text-lg mb-2"
                >ZIP</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="zip"
                    placeholder="Pvz: ....."
                    value="{{old('zip')}}"                    />

                @error('zip')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="street"
                       class="inline-block text-lg mb-2">
                    Gatve
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="street"
                    value="{{old('street')}}"                    />

                @error('street')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="house_number"
                    class="inline-block text-lg mb-2">
                    house_number
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="house_number"
                    value="{{old('house_number')}} "
                />
                @error('house_number')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="apartment_number"
                       class="inline-block text-lg mb-2">
                    apartment_number
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="apartment_number"
                    placeholder="Pvz: ..."
                    value="{{old('apartment_number')}}"                    />

                @error('apartment_number')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="state"
                       class="inline-block text-lg mb-2">
                    state
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="state"
                    placeholder="Pvz: ..."
                    value="{{old('state')}}"                    />

                @error('state')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="type"
                    class="inline-block text-lg mb-2">
                    type
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="type"
                    value="{{old('type')}}"                    />

                @error('type')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="additional_info" class="inline-block text-lg mb-2">
                    additional_info
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="additional_info"
                    value="{{old('additional_info')}}"                    />

                @error('additional_info')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="user_id" class="inline-block text-lg mb-2">
                    user_id
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="user_id"
                    value="{{old('user_id')}}"                    />

                @error('user_id')
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

                <a href="/addresses" class="text-black ml-4"> Atgal </a>
            </div>
        </form>
    </x-card>
</x-layout>
