@php use App\Models\Product; @endphp
<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <h1>Kurti produkta</h1><br>
        <hr>
        <span>Sukurimo forma</span>
        <hr>
        <form action="{{route('products.store')}}"
              method="post"
              enctype="multipart/form-data">

            {{--        @csrf--}}
            {{--        <input type="text" name="name" placeholder="Name" value=""><br>--}}
            {{--        <input type="text" name="slug" placeholder="Slug" value=""><br>--}}
            {{--        <input type="text" name="description" placeholder="Description" value=""><br>--}}
            {{--        <input type="text" name="image" placeholder="Image" value=""><br>--}}
            {{--        <input type="text" name="category_id" placeholder="Category ID" value=""><br>--}}
            {{--        <input type="text" name="color" placeholder="Color" value=""><br>--}}
            {{--        <input type="text" name="size" placeholder="Size" value=""><br>--}}
            {{--        <input type="text" name="price" placeholder="Price" value=""><br>--}}
            {{--        <input type="text" name="status_id" placeholder="Status ID" value=""><br>--}}
            {{--        <hr>--}}
            {{--        <input type="submit" class="waves-effect waves-light btn" value="Atnaujinti">--}}
            {{--    </form>--}}


            {{--    </x-layout>--}}

            @csrf
            {{--            <div class="mb-6">--}}
            {{--                <label--}}
            {{--                    for="name"--}}
            {{--                    class="inline-block text-lg mb-2">--}}
            {{--                    Produkto pavadinimas--}}
            {{--                </label>--}}
            {{--                <input--}}
            {{--                    type="text"--}}
            {{--                    class="border border-gray-200 rounded p-2 w-full"--}}
            {{--                    name="name"--}}
            {{--                    value="{{old('name')}}"--}}
            {{--                />--}}

            {{--                @error('name')--}}
            {{--                <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
            {{--                @enderror--}}
            {{--            </div>--}}

            {{--            <div class="mb-6">--}}
            {{--                <label for="title" class="inline-block text-lg mb-2"--}}
            {{--                >Slug </label--}}
            {{--                >--}}
            {{--                <input--}}
            {{--                    type="text"--}}
            {{--                    class="border border-gray-200 rounded p-2 w-full"--}}
            {{--                    name="slug"--}}
            {{--                    placeholder="Pvz: ...."--}}
            {{--                    value="{{old('slug')}}"--}}
            {{--                />--}}

            {{--                @error('slug')--}}
            {{--                <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
            {{--                @enderror--}}
            {{--            </div>--}}

            {{--            <div class="mb-6">--}}
            {{--                <label--}}
            {{--                    for="description"--}}
            {{--                    class="inline-block text-lg mb-2"--}}
            {{--                >Aprasymas</label--}}
            {{--                >--}}
            {{--                <input--}}
            {{--                    type="text"--}}
            {{--                    class="border border-gray-200 rounded p-2 w-full"--}}
            {{--                    name="description"--}}
            {{--                    placeholder="Pvz: ....."--}}
            {{--                    value="{{old('description')}}"/>--}}

            {{--                @error('description')--}}
            {{--                <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
            {{--                @enderror--}}
            {{--            </div>--}}

            {{--            <div class="mb-6">--}}
            {{--                <label for="image" class="inline-block text-lg mb-2"--}}
            {{--                >Paveiksliukas</label--}}
            {{--                >--}}
            {{--                <input--}}
            {{--                    type="text"--}}
            {{--                    class="border border-gray-200 rounded p-2 w-full"--}}
            {{--                    name="email"--}}
            {{--                    value="{{old('image')}}"/>--}}

            {{--                @error('image')--}}
            {{--                <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
            {{--                @enderror--}}
            {{--            </div>--}}

            {{--            <div class="mb-6">--}}
            {{--                <label--}}
            {{--                    for="category_id"--}}
            {{--                    class="inline-block text-lg mb-2"--}}
            {{--                >--}}
            {{--                    category_id--}}
            {{--                </label>--}}
            {{--                <input--}}
            {{--                    type="text"--}}
            {{--                    class="border border-gray-200 rounded p-2 w-full"--}}
            {{--                    name="category_id"--}}
            {{--                    value="{{old('category_id')}}"/>--}}

            {{--                @error('category_id')--}}
            {{--                <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
            {{--                @enderror--}}
            {{--            </div>--}}

            {{--            <div class="mb-6">--}}
            {{--                <label for="color" class="inline-block text-lg mb-2">--}}
            {{--                    color </label>--}}
            {{--                <input--}}
            {{--                    type="text"--}}
            {{--                    class="border border-gray-200 rounded p-2 w-full"--}}
            {{--                    name="color"--}}
            {{--                    placeholder="Pvz: ..."--}}
            {{--                    value="{{old('color')}}"--}}
            {{--                />--}}

            {{--                @error('color')--}}
            {{--                <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
            {{--                @enderror--}}
            {{--            </div>--}}

            {{--            <div class="mb-6">--}}
            {{--                <label for="size" class="inline-block text-lg mb-2">--}}
            {{--                    size--}}
            {{--                </label>--}}
            {{--                <input--}}
            {{--                    name="size"--}}
            {{--                    type="text"--}}
            {{--                    class="border border-gray-200 rounded p-2 w-full"--}}
            {{--                    value="{{old('size')}}"--}}
            {{--                />--}}
            {{--                @error('size')--}}
            {{--                <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
            {{--                @enderror--}}
            {{--            </div>--}}

            {{--            <div class="mb-6">--}}
            {{--                <label for="price"--}}
            {{--                       class="inline-block text-lg mb-2"--}}
            {{--                >--}}
            {{--                    price--}}
            {{--                </label>--}}
            {{--                <input--}}
            {{--                    type="text"--}}
            {{--                    class="border border-gray-200 rounded p-2 w-full"--}}
            {{--                    name="price"--}}
            {{--                    placeholder="Pvz: ..."--}}
            {{--                    value="{{old('price')}}"--}}
            {{--                />--}}

            {{--                @error('price')--}}
            {{--                <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
            {{--                @enderror--}}
            {{--            </div>--}}

            {{--            <div class="mb-6">--}}
            {{--                <label for="status_id"--}}
            {{--                       class="inline-block text-lg mb-2"--}}
            {{--                >--}}
            {{--                    status_id--}}
            {{--                </label>--}}
            {{--                <input--}}
            {{--                    type="text"--}}
            {{--                    class="border border-gray-200 rounded p-2 w-full"--}}
            {{--                    name="status_id"--}}
            {{--                    placeholder="Pvz: ..."--}}
            {{--                    value="{{old('status_id')}}"--}}
            {{--                />--}}

            {{--                @error('status_id')--}}
            {{--                <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
            {{--                @enderror--}}
            {{--            </div>--}}
            <x-forms.inputs :model="$product ?? (new Product())"
                            fields="name,slug,description,image,category_id,color,size,price,status_id"/>
            <input type="file" name="image"><br>

            <div class="mb-6">

                <button
                    type="submit"
                    class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                >
                    Kurti
                </button>

                <a href="/products" class="text-black ml-4"> Atgal </a>
            </div>
        </form>
    </x-card>
</x-layout>
