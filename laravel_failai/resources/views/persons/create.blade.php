<x-layout>
    @include('partials._hero')
<h1>Sukurti nauja</h1>
<span>Redagavimo forma</span>
<form action="{{route('persons.store')}}" method="post">

    @csrf
    <input type="text" name="name" placeholder="Name" value=""><br>
    <input type="text" name="surname" placeholder="Surname" value=""><br>
    <input type="text" name="personal_code" placeholder="Personal_code" value=""><br>
    <input type="text" name="email" placeholder="email" value=""><br>
    <input type="text" name="phone" placeholder="Phone" value=""><br>
    <hr>
    <input type="submit" class="waves-effect waves-light btn" value="Sukurti">
</form>
</x-layout>
