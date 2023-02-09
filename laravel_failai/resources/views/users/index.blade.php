<x-layout>
    @include('partials._hero')
    @include('partials._search')
    <x-card class="p-2 max-w-xl mx-auto mt-24">
        {{--    <div class="row">--}}
        {{--        <div class="col s12">--}}
        <hr>
        <p class="text-center text-xxl-center">Users</p><br>
        <hr>
        <a
            href="{{route('users.create')}}"
            class="absolute top-3/3 right-10 bg-black text-white
                  py-2 px-5">
            Kurti nauja useri
        </a>
        <table class="table-auto">
            <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>email</th>
                <th>password</th>
                <th>Veiksmai</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)

                <tr>
                    <td><h3 class="text-2xl">
                            {{$user->id}}
                        </h3></td>
                    <td><img class="hidden w-48 mr-6 md:block"
                             src="https://picsum.photos/50"
                             alt="image"/></td>
                    <td><h3 class="text-2xl">
                            <a href="/users/{{$user->id}}">
                                {{$user->name}}</a>
                        </h3>
                    </td>
                    <td class="text-center">
                        <div class="text-xl font-bold mb-4">
                            {{$user->email}}
                        </div>
                    </td>
                    <td><h3 class="text-2xl">
                            {{$user->password}}
                        </h3></td>
                    <td class="text-right">
                        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                            <a href="{{route('users.edit', $user->id)}}"
                               class="btn btn-primary">Redaguoti
                            </a>
                        </button>
                        <form action="{{route('users.destroy', $user->id)}}" method="post">
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
