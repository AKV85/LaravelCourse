<x-layout>
    @include('partials._hero')
    @include('partials._search')
    <x-card class="p-2 max-w-xl mx-auto mt-24">
        {{--    <div class="row">--}}
        {{--        <div class="col s12">--}}
        <hr>
        <p class="text-center text-xxl-center">Adresai</p><br>
        <hr>
        <a
            href="{{route('addresses.create')}}"
            class="absolute top-3/3 right-10 bg-black text-white
                  py-2 px-5">
            Kurti nauja produkta
        </a>
        <table class="table-auto">
            <thead>
            <tr>
                <th>ID</th>
                <th>{{__('address.name')}}</th>
                <th>{{__('address.country')}}</th>
                <th>{{__('address.city')}}</th>
                <th>{{__('address.street')}}</th>
                <th>{{__('general.actions')}}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($addresses as $address)

                <tr>
                    <td>
                        <h3 class="text-2xl">
                            {{$address->id}}
                        </h3>
                    </td>
                    <td>
                        <h3 class="text-2xl">
                            {{$address->name}}
                        </h3>
                    </td>
                    <td><h3 class="text-2xl">
                            <a href="addresses/{{$address->id}}">
                                {{$address->country}}</a>
                        </h3>
                    </td>
                    <td class="text-center">
                        <div class="text-xl font-bold mb-4">
                            {{$address->city}}
                        </div>
                    </td>
                    <td>
                        <h3 class="text-2xl">
                            {{$address->street}}
                        </h3>
                    </td>

                    <td class="text-right">
                        <div class="card-action">
                            <x-forms.buttons.action :model="$address" mainRoute="addresses" :showBack="false"/>
                        </div>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
        <hr>
    </x-card>
    <div class="mt-6 p-4">
        {{$addresses->links()}}
    </div>
</x-layout>
