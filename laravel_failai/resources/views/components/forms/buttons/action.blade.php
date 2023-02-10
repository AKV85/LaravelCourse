@if ($showBack)
<a href="{{route($mainRoute . '.index')}}" class="text-black ml-4"> Atgal </a>
@endif
<button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
    <a href="{{route($mainRoute . '.edit', $model->id)}}"
       class="btn btn-primary">Redaguoti
    </a>
</button>
<form action="{{route($mainRoute . '.destroy', $model->id)}}" method="post">
    @csrf
    @method('DELETE')
    <button
        type="submit"
        class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
    > Pašalinti
    </button>

</form>
