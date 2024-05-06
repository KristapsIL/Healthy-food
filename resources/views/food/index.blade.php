<x-layout title="home">
    <h1>Food page</h1>
    @foreach($foods as $food)
        <div>
            <h2><a href="show/{{$food->id}}">{{$food->name}}</a></h2>
            <p>{{$food->description}}</p>
            <p>{{$food->recipe}}</p>
            <p>Average Rating: {{ $food->ratings ? $food->ratings->avg('rating', 1) : 'No ratings yet' }}</p>
        </div>
        <form action="/foods/{{ $food->id }}/ratings" method="POST">
            @csrf
            <input type="number" name="rating" min="1" max="5">
            <button type="submit">Rate</button>
        </form>
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