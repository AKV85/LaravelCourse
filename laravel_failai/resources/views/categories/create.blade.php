<x-layout>
    @include('partials._hero')
    @include('partials._search')

    <h1>Editing category</h1>
    <span>Redagavimo forma</span>
    <form action="{{route('categories.store')}}" method="post">

        @csrf
        <input type="text" name="name" placeholder="Name" value=""><br>
        <input type="text" name="slug" placeholder="Slug" value=""><br>
        <input type="text" name="description" placeholder="Description" value=""><br>
        <input type="text" name="image" placeholder="Image" value=""><br>
        <input type="text" name="status_id" placeholder="status_id" value=""><br>
        <input type="text" name="parent_id" placeholder="parent_id" value=""><br>
        <input type="text" name="sort_order" placeholder="sort_order" value=""><br>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Sukurti">
    </form>

    </x-layout>
