<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <div class="card">
            <div class="card-image">
                <img src="{{$product->image}}" alt="img">
                <span class="card-title">{{ $product->name }}</span>
            </div>
            <div class="card-content">
                <div>ID: {{$product->id}}</div>
                <p>Price: {{ $product->price }}</p>
                <p>Description: {{ $product->description }}</p>
                <p>Categories: {{ $product->category->name }}</p>
                <p>Creation date: {{ $product->created_at }}</p>
                <p>Last updated: {{ $product->updated_at }}</p>
                <p>
                    @foreach($product->images as $file)
                        <img src="{{url($file)}}" width="50" alt="{{$file->name}}">
                @endforeach
                <hr>
                @foreach($product->files as $file)
                    <span class="new badge" data-badge-caption="">
                                <a href="{{url($file)}}" style="text-decoration: none; color: white"
                                   target="_blank">{{ $file->name }}</a>
{{-- @TODO: Uzbaigti ikigalo failo trynima --}}
                                <form action="{{route('product.destroy-file', $file)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">D</button>
                                </form>
                            </span>
                @endforeach
                <br>
            </div>

            <div class="card-action">
                <nav class="flex justify-between items-center mb-4">
                    <x-forms.buttons.action :model="$product" mainRoute="products" :showBack="true"/>
                </nav>
            </div>

        </div>

    </x-card>
</x-layout>

