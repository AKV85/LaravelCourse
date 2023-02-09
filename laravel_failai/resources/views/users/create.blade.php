<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <h1>Kurti useri</h1><br>
        <hr>
        <span>Sukurimo forma</span>
        <hr>
        <form action="{{route('users.store')}}" method="post">
            @csrf
            <div class="mb-6">
                <label
                    for="name"
                    class="inline-block text-lg mb-2">
                    Userio vardas
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
                <label for="email" class="inline-block text-lg mb-2">
                    email
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="email"
                    placeholder="Pvz: ...."
                    value="{{old('email')}}"
                />

                @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="password"
                    class="inline-block text-lg mb-2">
                    password
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="password"
                    placeholder="Pvz: ....."
                    value="{{old('password')}}"                    />

                @error('password')
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

                <a href="/users" class="text-black ml-4"> Atgal </a>
            </div>
        </form>
    </x-card>
</x-layout>
