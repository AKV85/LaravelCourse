<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <h1>Atnaujinti {{$person->name}}</h1><br><hr>

        <span>Redagavimo forma</span><hr>
        <form action="{{route('persons.update', $person->id)}}" method="post">
            @method('PUT')
            @csrf

            <x-forms.inputs :model="$person ?? (new \App\Models\Person())"
                            fields="name,surname,personal_code,email,phone,user_id,address_id"/>

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
