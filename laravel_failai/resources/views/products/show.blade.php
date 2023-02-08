<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
                <div class="card">
                    <div class="card-image">
                        <img src="https://picsum.photos/300" alt="img">
                        <span class="card-title">{{ $product->name }}</span>
                    </div>
                    <div class="card-content">
                        <div>ID: {{$product->id}}</div>
                        <p>Price: {{ $product->price }}</p>
                        <p>Description: {{ $product->description }}</p>
                        <p>Categories: {{ $product->category->name }}</p>
                        <p>Creation date: {{ $product->created_at }}</p>
                        <p>Last updated: {{ $product->updated_at }}</p>
                    </div>
                    <div class="card-action">
                        <nav class="flex justify-between items-center mb-4">
                            <a href="/products" class="text-black ml-4"> Atgal </a>

                            <ul class="flex space-x-6 mr-6 text-lg">
                                <li>
                                    <button
                                        class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                                        <a href="{{route('products.edit', $product->id)}}"
                                           class="btn btn-primary"> Redaguoti
                                        </a>
                                    </button>
                                </li>
                                <li>
                                    <form action="{{route('products.destroy', $product->id)}}" method="post">
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

