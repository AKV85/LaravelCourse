<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
    <h1>Atnaujinti {{$product->name}}</h1><br><hr>

    <span>Redagavimo forma</span><hr>
    <form action="{{route('products.update', $product->id)}}" method="post">
        @method('PUT')
{{--        @csrf--}}
{{--        <input type="text" name="name" placeholder="Name" value="{{$product->name}}"><br>--}}
{{--        <input type="text" name="slug" placeholder="Slug" value="{{$product->slug}}"><br>--}}
{{--        <input type="text" name="description" placeholder="Description" value="{{$product->description}}"><br>--}}
{{--        <input type="text" name="image" placeholder="Image" value="{{$product->image}}"><br>--}}
{{--        <input type="text" name="category_id" placeholder="Category ID" value="{{$product->category_id}}"><br>--}}
{{--        <input type="text" name="color" placeholder="Color" value="{{$product->color}}"><br>--}}
{{--        <input type="text" name="size" placeholder="Size" value="{{$product->size}}"><br>--}}
{{--        <input type="text" name="price" placeholder="Price" value="{{$product->price}}"><br>--}}
{{--        <input type="text" name="status_id" placeholder="Status ID" value="{{$product->status_id}}"><br>--}}
{{--        <hr>--}}
{{--        <input type="submit" class="waves-effect waves-light btn" value="Atnaujinti">--}}
{{--    </form>--}}
{{--            <form method="POST" action="/products" enctype="multipart/form-data">--}}
                @csrf
{{--                <div class="mb-6">--}}
{{--                    <label--}}
{{--                        for="name"--}}
{{--                        class="inline-block text-lg mb-2">--}}
{{--                        Produkto pavadinimas--}}
{{--                    </label>--}}
{{--                    <input--}}
{{--                        type="text"--}}
{{--                        class="border border-gray-200 rounded p-2 w-full"--}}
{{--                        name="name"--}}
{{--                        value="{{$product->name}}"--}}
{{--                    />--}}

{{--                    @error('name')--}}
{{--                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
{{--                    @enderror--}}
{{--                </div>--}}

{{--                <div class="mb-6">--}}
{{--                    <label for="title" class="inline-block text-lg mb-2"--}}
{{--                    >Slug </label--}}
{{--                    >--}}
{{--                    <input--}}
{{--                        type="text"--}}
{{--                        class="border border-gray-200 rounded p-2 w-full"--}}
{{--                        name="slug"--}}
{{--                        placeholder="Pvz: ...."--}}
{{--                        value="{{$product->slug}}"--}}
{{--                    />--}}

{{--                    @error('slug')--}}
{{--                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
{{--                    @enderror--}}
{{--                </div>--}}

{{--                <div class="mb-6">--}}
{{--                    <label--}}
{{--                        for="description"--}}
{{--                        class="inline-block text-lg mb-2"--}}
{{--                    >Aprasymas</label--}}
{{--                    >--}}
{{--                    <input--}}
{{--                        type="text"--}}
{{--                        class="border border-gray-200 rounded p-2 w-full"--}}
{{--                        name="description"--}}
{{--                        placeholder="Pvz: ....."--}}
{{--                        value="{{$product->description}}"                    />--}}

{{--                    @error('description')--}}
{{--                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
{{--                    @enderror--}}
{{--                </div>--}}

{{--                <div class="mb-6">--}}
{{--                    <label for="image" class="inline-block text-lg mb-2"--}}
{{--                    >Paveiksliukas</label--}}
{{--                    >--}}
{{--                    <input--}}
{{--                        type="text"--}}
{{--                        class="border border-gray-200 rounded p-2 w-full"--}}
{{--                        name="image"--}}
{{--                        value="{{$product->image}}"                    />--}}

{{--                    @error('image')--}}
{{--                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
{{--                    @enderror--}}
{{--                </div>--}}

{{--                <div class="mb-6">--}}
{{--                    <label--}}
{{--                        for="category_id"--}}
{{--                        class="inline-block text-lg mb-2"--}}
{{--                    >--}}
{{--                        category_id--}}
{{--                    </label>--}}
{{--                    <input--}}
{{--                        type="text"--}}
{{--                        class="border border-gray-200 rounded p-2 w-full"--}}
{{--                        name="category_id"--}}
{{--                        value="{{$product->category_id}} "                   />--}}

{{--                    @error('category_id')--}}
{{--                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
{{--                    @enderror--}}
{{--                </div>--}}

{{--                <div class="mb-6">--}}
{{--                    <label for="color" class="inline-block text-lg mb-2">--}}
{{--                        color                    </label>--}}
{{--                    <input--}}
{{--                        type="text"--}}
{{--                        class="border border-gray-200 rounded p-2 w-full"--}}
{{--                        name="color"--}}
{{--                        placeholder="Pvz: ..."--}}
{{--                        value="{{$product->color}}"                    />--}}

{{--                    @error('color')--}}
{{--                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
{{--                    @enderror--}}
{{--                </div>--}}

{{--                <div class="mb-6">--}}
{{--                    <label for="size" class="inline-block text-lg mb-2">--}}
{{--                        size                    </label>--}}
{{--                    <input--}}
{{--                        name="size"--}}
{{--                        type="text"--}}
{{--                        class="border border-gray-200 rounded p-2 w-full"--}}
{{--                        value="{{$product->size}}"                    />--}}

{{--                    @error('size')--}}
{{--                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
{{--                    @enderror--}}
{{--                </div>--}}

{{--        <div class="mb-6">--}}
{{--            <label--}}
{{--                for="price"--}}
{{--                class="inline-block text-lg mb-2"--}}
{{--            >--}}
{{--                price--}}
{{--            </label>--}}
{{--            <input--}}
{{--                type="text"--}}
{{--                class="border border-gray-200 rounded p-2 w-full"--}}
{{--                name="price"--}}
{{--                value="{{$product->price}}"                    />--}}

{{--            @error('price')--}}
{{--            <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
{{--            @enderror--}}
{{--        </div>--}}

{{--        <div class="mb-6">--}}
{{--            <label for="status_id" class="inline-block text-lg mb-2">--}}
{{--                status_id--}}
{{--            </label>--}}
{{--            <input--}}
{{--                type="text"--}}
{{--                class="border border-gray-200 rounded p-2 w-full"--}}
{{--                name="status_id"--}}
{{--                value="{{$product->status_id}}"                    />--}}

{{--            @error('status_id')--}}
{{--            <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
{{--            @enderror--}}
{{--        </div>--}}
        <x-forms.inputs :model="$product ?? (new \App\Models\Product())"
                        fields="name,slug,description,image,category_id,color,size,price,status_id"/>
                <div class="mb-6">
                    <button
                        type="submit"
                        class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                    >
                        Atnaujinti
                    </button>

                    <a href="/products" class="text-black ml-4"> Atgal </a>
                </div>
            </form>
    </x-card>
</x-layout>
