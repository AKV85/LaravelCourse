<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <h1>Kurti statusa</h1><br>
        <hr>
        <span>Sukurimo forma</span>
        <hr>
        <form action="{{route('statuses.store')}}" method="post">

            @csrf
            <x-forms.inputs :model="$status ?? (new \App\Models\Status())"
                            fields="name,type"/>
            <div class="mb-6">

                <button
                    type="submit"
                    class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                >
                    Kurti
                </button>

                <a href="/statuses" class="text-black ml-4"> Atgal </a>
            </div>
        </form>
    </x-card>
</x-layout>
