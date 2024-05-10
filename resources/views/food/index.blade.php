<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<x-layout title="home">
    <div class="main" >
    <h1>Food page</h1>
    @foreach($foods as $food)
        <div>
            <h2><a href="show/{{$food->id}}">{{$food->name}}</a></h2>
            <p>{{$food->description}}</p>
            <p>{{$food->recipe}}</p>
            <p>Average Rating: {{ ($food->ratings != null && $food->ratings->count() > 0) ? round($food->ratings->avg('rating'),1) : 'No ratings yet' }}</p>
            <form action="/foods/{{ $food->id }}/ratings" method="POST">
                @csrf
                <input type="number" name="rating" min="1" max="5">
                <button type="submit">Rate</button>
            </form>
            @auth
                @if(Auth::user()->hasBookmarked($food->id))
                    <form action="/foods/{{ $food->id }}/bookmarks" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Remove Bookmark</button>
                    </form>
                @else
                    <form action="/foods/{{ $food->id }}/bookmarks" method="POST">
                        @csrf
                        <button type="submit">Bookmark</button>
                    </form>
                @endif
            @endauth
        </div>
    @endforeach
</x-layout>