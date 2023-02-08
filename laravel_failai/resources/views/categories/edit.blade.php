
    <h1>Editing {{$category->name}}</h1>
    <span>Redagavimo forma</span>
    <form action="{{route('products.update', $category->id)}}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{$category->name}}"><br>
        <input type="text" name="slug" placeholder="Slug" value="{{$category->slug}}"><br>
        <input type="text" name="description" placeholder="Description" value="{{$category->description}}"><br>
        <input type="text" name="image" placeholder="Image" value="{{$category->image}}"><br>
        <input type="text" name="status_id" placeholder="Status ID" value="{{$category->status_id}}"><br>
        <input type="text" name="parent_id" placeholder="parent_id" value="{{$category->parent_id}}"><br>
        <input type="text" name="sort_order" placeholder="sort_order" value="{{$category->sort_order}}"><br>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Atnaujinti">
    </form>
