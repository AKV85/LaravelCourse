<x-layout>
    @include('partials._hero')
    @include('partials._search')
    <x-card class="p-2 max-w-xl mx-auto mt-24">
        {{--    <div class="row">--}}
        {{--        <div class="col s12">--}}
        <hr>
        <p class="text-center text-xxl-center">Persons</p><br>
        <hr>
        <a
            href="{{route('persons.create')}}"
            class="absolute top-3/3 right-10 bg-black text-white
                  py-2 px-5">
            Kurti nauja person
        </a>
        <table class="table-auto">
            <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Surname</th>
                <th>user_id</th>
                <th>Veiksmai</th>
            </tr>
            </thead>
            <tbody>
            @foreach($persons as $person)

                <tr>
                    <td><h3 class="text-2xl">
                            {{$person->id}}
                        </h3></td>
                    <td><img class="hidden w-48 mr-6 md:block"
                             src="https://picsum.photos/50"
                             alt="image"/></td>
                    <td><h3 class="text-2xl">
                            <a href="/persons/{{$person->id}}">
                                {{$person->name}}</a>
                        </h3>
                    </td>
                    <td class="text-center">
                        <div class="text-xl font-bold mb-4">
                            {{$person->surname}}
                        </div>
                    </td>
                    <td><h3 class="text-2xl">
                            {{$person->user->name}}
                        </h3></td>

                    <td class="text-right">
                        <div class="card-action">
                       <x-forms.buttons.action :model="$person" mainRoute="persons" :showBack="false" />
                        </div>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
        <hr>

    </x-card>
    <div class="mt-6 p-4" >
        {{$persons->links()}}
    </div>
</x-layout>
