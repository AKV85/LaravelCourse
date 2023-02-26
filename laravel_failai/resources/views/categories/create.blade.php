<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <h1>Kurti kategorija</h1><br>
        <hr>
        <span>Sukurimo forma</span>
        <hr>
        <form action="{{route('categories.store')}}" method="post">

            @csrf

            <x-forms.inputs :model="$category ?? (new \App\Models\Category())"
                            fields="name, slug, description, image, status_id, parent_id, sort_order"/>

            <div class="mb-6">

                <button
                    type="submit"
                    class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                >
                    Kurti
                </button>

                <a href="/categories" class="text-black ml-4"> Atgal </a>
            </div>
        </form>
    </x-card>
</x-layout>
   
