<x-layout>
    @include('partials._hero')
    @include('partials._search')
    <x-card class="p-2 max-w-xl mx-auto mt-24">
        {{--    <div class="row">--}}
        {{--        <div class="col s12">--}}
        <hr>
        <p class="text-center text-xxl-center">Kategorijos</p><br>
        <hr>
        <a
            href="{{route('categories.create')}}"
            class="absolute top-3/3 right-10 bg-black text-white
                  py-2 px-5">
            Kurti nauja produkta
        </a>
        <table class="table-auto">
            <thead>
            <tr>
                <th>ID</th>
                <th>{{__('categories.image')}}</th>
                <th>{{__('categories.name')}}</th>
                <th>{{__('categories.slug')}}</th>
                <th>{{__('categories.status')}}</th>
                <th>{{__('general.actions')}}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)

                <tr>
                    <td><h3 class="text-2xl">
                            {{$category->id}}
                        </h3></td>
                    <td><img class="hidden w-48 mr-6 md:block"
                             src="https://picsum.photos/50"
                             alt="image"/></td>
                    <td><h3 class="text-2xl">
                            <a href="/categories/{{$category->id}}">
                                {{$category->name}}</a>
                        </h3>
                    </td>
                    <td class="text-center">
                        <div class="text-xl font-bold mb-4">
                            {{$category->slug}}
                        </div>
                    </td>
                    <td><h3 class="text-2xl">
                            {{$category->status_id}}
                        </h3></td>

                    <td class="text-right">
                        <div class="card-action">
                            <x-forms.buttons.action :model="$category" mainRoute="categories" :showBack="false" />
                        </div>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
        <hr>
    </x-card>
    <div class="mt-6 p-4" >
        {{$categories->links()}}
    </div>
</x-layout>
