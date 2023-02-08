@props(['addresses'])
<x-card>
         <div class="flex">
        {{--         <img class="hidden w-48 mr-6 md:block"--}}
                          {{--              src="{{$product->logo}}"--}}
                          {{--              alt="image"/>--}}
        <div>
            <h3 class="text-2xl">
                <a href="/addresses/{{$address->id}}">
                    {{$address->name}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">
                {{$address->zip}}
            </div>

            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i>
                {{$address->type}}
            </div>
        </div>
    </div>
</x-card>
