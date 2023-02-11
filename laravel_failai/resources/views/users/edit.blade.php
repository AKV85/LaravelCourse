<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <h1>Atnaujinti {{$user->name}}</h1><br><hr>

        <span>Redagavimo forma</span><hr>
        <form action="{{route('users.update', $user->id)}}" method="post">
            @method('PUT')
            @csrf
            <x-forms.inputs :model="$user ?? (new \App\Models\User())"
                            fields="name,email,email_verified_at,password,remember_token"/>

            <div class="mb-6">

                <button
                    type="submit"
                    class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                >
                    Atnaujinti
                </button>

                <a href="/users" class="text-black ml-4"> Atgal </a>
            </div>
        </form>
    </x-card>
</x-layout>
