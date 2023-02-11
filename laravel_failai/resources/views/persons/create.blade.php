<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <h1>Kurti person</h1><br>
        <hr>
        <span>Sukurimo forma</span>
        <hr>
        <form action="{{route('persons.store')}}" method="post">

            @csrf

            <x-forms.inputs :model="$person ?? (new \App\Models\Person())"
                            fields="name,surname,personal_code,email,phone,user_id,address_id"/>

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
