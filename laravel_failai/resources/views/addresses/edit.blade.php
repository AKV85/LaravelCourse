<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <h1>Atnaujinti {{$address->name}}</h1><br><hr>

        <span>Redagavimo forma</span><hr>
        <form action="{{route('addresses.update', $address->id)}}" method="post">
            @method('PUT')
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
                    value="{{$address->name}}"
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
                    value="{{$address->country}}"
                />

                @error('country')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="city"
                    class="inline-block text-lg mb-2">
                    city
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="city"
                    value="{{$address->city}}"
                />

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
                    value="{{$address->zip}}"                    />

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
                    value="{{$address->street}}"                    />

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
                    value="{{$address->house_number}} "
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
                    value="{{$address->apartment_number}}"                    />

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
                    value="{{$address->state}}"                    />

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
                    value="{{$address->type}}"                    />

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
                    value="{{$address->additional_info}}"                    />

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
                    value="{{$address->user_id}}"                    />

                @error('user_id')
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

                <a href="/addresses" class="text-black ml-4"> Atgal </a>
            </div>
        </form>
    </x-card>
</x-layout>
