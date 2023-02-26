@props(['products'])
<x-card>
    {{--     <div class="flex">--}}
    {{--         <img class="hidden w-48 mr-6 md:block"--}}
    {{--              src="{{$product->logo}}"--}}
    {{--              alt="image"/>--}}
    <div>
        <h3 class="text-2xl">
            <a href="/products/{{$product->id}}">
                {{$product->name}}</a>
        </h3>
        <div class="text-xl font-bold mb-4">
            {{$product->slug}}
        </div>

        <div class="text-lg mt-4">
            <i class="fa-solid fa-location-dot"></i>
            {{$price->price}}
        </div>
    </div>
    </div>
</x-card>
