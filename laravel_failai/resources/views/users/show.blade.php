<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <div class="card">
            <div class="card-image">
                <img src="https://picsum.photos/300" alt="img">
                <span class="card-title">{{ $user->name }}</span>
            </div>
            <div class="card-content">
                <div>ID: {{$user->id}}</div>
                <p>Price: {{ $user->name }}</p>
                <p>email: {{ $user->email }}</p>
                <p>email_verified_at: {{ $user->email_verified_at }}</p>
                <p>password: {{ $user->password }}</p>
                <p>remember_token: {{ $user->remember_token }}</p>

                <p>Creation date: {{ $user->created_at }}</p>
                <p>Last updated: {{ $user->updated_at }}</p>
            </div>
            <div class="card-action">
                <nav class="flex justify-between items-center mb-4">
                    <a href="/users" class="text-black ml-4"> Atgal </a>

                    <ul class="flex space-x-6 mr-6 text-lg">
                        <li>
                            <button
                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                                <a href="{{route('users.edit', $user->id)}}"
                                   class="btn btn-primary"> Redaguoti
                                </a>
                            </button>
                        </li>
                        <li>
                            <form action="{{route('users.destroy', $user->id)}}" method="post">
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

