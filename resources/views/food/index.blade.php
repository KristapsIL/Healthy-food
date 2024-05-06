<x-layout title="home">
    <h1>Food page</h1>
    @foreach($foods as $food)
        <div>
            <h2><a href="show/{{$food->id}}">{{$food->name}}</a></h2>
            <p>{{$food->description}}</p>
            <p>{{$food->recipe}}</p>
            <p>{{$food->rating}}</p>
        </div>
        <form action="/foods/{{ $food->id }}/bookmarks" method="POST">
            @csrf
            <button type="submit">Bookmark</button>
        </form>
        <form action="/foods/{{ $food->id }}/bookmarks" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Remove Bookmark</button>
        </form>
    @endforeach
</x-layout>