<x-layout>
    @include('partials._hero')
    @include('partials._search')
    <x-card class="p-2 max-w-xl mx-auto mt-24">
        {{--    <div class="row">--}}
        {{--        <div class="col s12">--}}
        <hr>
        <p class="text-center text-xxl-center">Products</p><br>
        <hr>
        <a
            href="{{route('products.create')}}"
            class="absolute top-3/3 right-10 bg-black text-white
                  py-2 px-5">
            Kurti nauja produkta
        </a>
        <table class="table-auto">
            <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Produkto pavadinimas</th>
                <th>Ismeras</th>
                <th>Kaina</th>
                <th>Veiksmai</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)

                <tr>
                    <td><h3 class="text-2xl">
                            {{$product->id}}
                        </h3></td>
                    <td><img class="hidden w-48 mr-6 md:block"
                             src="https://picsum.photos/50"
                             alt="image"/></td>
                    <td><h3 class="text-2xl">
                            <a href="/products/{{$product->id}}">
                                {{$product->name}}</a>
                        </h3>
                    </td>
                    <td class="text-center">
                        <div class="text-xl font-bold mb-4">
                            {{$product->size}}
                        </div>
                    </td>
                    <td><h3 class="text-2xl">
                            {{$product->price}} $
                        </h3></td>
                    <td class="text-right">
                        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                            <a href="{{route('products.edit', $product->id)}}"
                               class="btn btn-primary">Redaguoti
                            </a>
                        </button>
                        <form action="{{route('products.destroy', $product->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button
                                type="submit"
                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                            > Pašalinti
                            </button>

                        </form>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
        <hr>
    </x-card>
</x-layout>
