<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <div class="card">
            <div class="card-image">
                <img src="https://picsum.photos/200">
                <span class="card-title">{{ $person->name }}</span>
            </div>
            <div class="card-content">
                <div>ID: {{$person->id}}</div>
                <p>Name: {{ $person->name }}</p>
                <p>Surname: {{ $person->surname }}</p>
                <p>PersCod: {{ $person->personal_code }}</p>
                <p>Email: {{ $person->email }}</p>
                <p>Phone: {{ $person->phone }}</p>
                <p>user Name: {{ $person->user->name }}</p>
                <p>Address: {{ $person->address_id}}</p>
                <p>Creation date: {{ $person->created_at }}</p>
                <p>Last updated: {{ $person->updated_at }}</p>
            </div>
            <div class="card-action">
                <nav class="flex justify-between items-center mb-4">
                    <a href="/persons" class="text-black ml-4"> Atgal </a>

                    <ul class="flex space-x-6 mr-6 text-lg">
                        <li>
                            <button
                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                                <a href="{{route('persons.edit', $person->id)}}"
                                   class="btn btn-primary"> Redaguoti
                                </a>
                            </button>
                        </li>
                        <li>
                            <form action="{{route('persons.destroy', $person->id)}}" method="post">
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
