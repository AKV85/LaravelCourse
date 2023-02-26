<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <h1>Atnaujinti {{$address->name}}</h1><br>
        <hr>

        <span>Redagavimo forma</span>
        <hr>
        <form action="{{route('addresses.update', $address->id)}}"
              method="post">
            @method('PUT')
            @csrf

            <x-forms.inputs :model="$address ?? (new \App\Models\Address())"
                            fields="name, country, city, zip, street, house_number,
                             apartment_number, state, type, additional_info, user_id"/>

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
