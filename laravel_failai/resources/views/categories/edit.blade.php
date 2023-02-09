<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <h1>Atnaujinti {{$category->name}}</h1><br><hr>

        <span>Redagavimo forma</span><hr>
        <form action="{{route('categories.update', $category->id)}}" method="post">
            @method('PUT')
            @csrf
            <div class="mb-6">
                <label
                    for="name"
                    class="inline-block text-lg mb-2">
                    Produkto pavadinimas
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="name"
                    value="{{$category->name}}"
                />

                @error('name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2"
                >Slug </label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="slug"
                    placeholder="Pvz: ...."
                    value="{{$category->slug}}"
                />

                @error('slug')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="description"
                    class="inline-block text-lg mb-2"
                >Aprasymas</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="description"
                    placeholder="Pvz: ....."
                    value="{{$category->description}}"                    />

                @error('description')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="image" class="inline-block text-lg mb-2"
                >Paveiksliukas</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="image"
                    value="{{$category->image}}"                    />

                @error('image')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="status_id"
                    class="inline-block text-lg mb-2"
                >
                    status_id
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="status_id"
                    value="{{$category->status_id}} "                   />

                @error('status_id')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="parent_id" class="inline-block text-lg mb-2">
                    parent_id
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="parent_id"
                    placeholder="Pvz: ..."
                    value="{{$category->parent_id}}"                    />

                @error('parent_id')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="sort_order" class="inline-block text-lg mb-2">
                    sort_order                    </label>
                <input
                    name="sort_order"
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    value="{{$category->sort_order}}"                    />

                @error('sort_order')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">

                <button
                    type="submit"
                    class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                >
                    Atnaujinti
                </button>

                <a href="/categories" class="text-black ml-4"> Atgal </a>
            </div>
        </form>
    </x-card>
</x-layout>
