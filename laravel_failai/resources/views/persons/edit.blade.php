<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <h1>Atnaujinti {{$person->name}}</h1><br><hr>

        <span>Redagavimo forma</span><hr>
        <form action="{{route('persons.update', $person->id)}}" method="post">
            @method('PUT')
            @csrf
            <div class="mb-6">
                <label
                    for="name"
                    class="inline-block text-lg mb-2">
                    Person vardas
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="name"
                    value="{{$person->name}}"
                />

                @error('name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="surname" class="inline-block text-lg mb-2"
                >surname </label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="surname"
                    placeholder="Pvz: ...."
                    value="{{$person->surname}}"
                />

                @error('surname')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="personal_code"
                    class="inline-block text-lg mb-2"
                >personal_code</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="personal_code"
                    placeholder="Pvz: ....."
                    value="{{$person->personal_code}}"                    />

                @error('personal_code')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2"
                >email</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="email"
                    value="{{$person->email}}"                    />

                @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="phone"
                    class="inline-block text-lg mb-2"
                >
                    phone
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="phone"
                    value="{{$person->phone}} "                   />

                @error('phone')
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
                    placeholder="Pvz: ..."
                    value="{{$person->user_id}}"                    />

                @error('user_id')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="address_id" class="inline-block text-lg mb-2">
                    address_id                    </label>
                <input
                    name="address_id"
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    value="{{$person->address_id}}"                    />

                @error('address_id')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">

                <button
                    type="submit"
                    class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Atnaujinti
                </button>

                <a href="/persons" class="text-black ml-4"> Atgal </a>
            </div>
        </form>
    </x-card>
</x-layout>
