<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <h1>Kurti person</h1><br>
        <hr>
        <span>Sukurimo forma</span>
        <hr>
        <form action="{{route('persons.store')}}" method="post">

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
                    value="{{old('name')}}"
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
                    value="{{old('surname')}}"
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
                    value="{{old('personal_code')}}"                    />

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
                    value="{{old('email')}}"                    />

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
                    value="{{old('phone')}} "                   />

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
                    value="{{old('user_id')}}"                    />

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
                    value="{{old('address_id')}}"                    />

                @error('address_id')
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

                <a href="/persons" class="text-black ml-4"> Atgal </a>
            </div>
        </form>
    </x-card>
</x-layout>
