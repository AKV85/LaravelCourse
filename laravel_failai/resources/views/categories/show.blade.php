<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <div class="card">
            <div class="card-image">
                <img src="https://picsum.photos/300" alt="img">
                <span class="card-title">{{ $category->name }}</span>
            </div>
            <div class="card-content">
                <div>ID: {{$category->id}}</div>
                <p>slug: {{ $category->slug }}</p>
                <p>description: {{ $category->description }}</p>
                <p>status_id: {{ $category->status_id }}</p>
                <p>parent_id: {{ $category->parent_id }}</p>
                <p>sort_order: {{ $category->sort_order }}</p>
                <p>Creation date: {{ $category->created_at }}</p>
                <p>Last updated: {{ $category->updated_at }}</p>
            </div>
            <div class="card-action">
                <nav class="flex justify-between items-center mb-4">
                    <a href="/categories" class="text-black ml-4"> Atgal </a>

                    <ul class="flex space-x-6 mr-6 text-lg">
                        <li>
                            <button
                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                                <a href="{{route('categories.edit', $category->id)}}"
                                   class="btn btn-primary"> Redaguoti
                                </a>
                            </button>
                        </li>
                        <li>
                            <form action="{{route('categories.destroy', $category->id)}}" method="post">
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

