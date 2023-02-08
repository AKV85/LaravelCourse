<x-layout>
    @include('partials._hero')
<h1>Editing Persons {{$person->name}}</h1>
<span>Redagavimo forma</span>
<form action="{{route('persons.update', $person->id)}}" method="post">
    @method('PUT')
    @csrf
    <input type="text" name="name" placeholder="Name" value="{{$person->name}}"><br>
    <input type="text" name="slug" placeholder="Slug" value="{{$person->slug}}"><br>
    <input type="text" name="description" placeholder="Description" value="{{$person->personal_code}}"><br>
    <input type="text" name="image" placeholder="Image" value="{{$person->email}}"><br>
    <input type="text" name="category_id" placeholder="Category ID" value="{{$person->phone}}"><br>
    <input type="text" name="color" placeholder="Color" value="{{$person->user_id}}"><br>
    <input type="text" name="size" placeholder="Size" value="{{$person->address_id}}"><br>

    <hr>
    <input type="submit" class="waves-effect waves-light btn" value="Atnaujinti">
</form>
</x-layout>
