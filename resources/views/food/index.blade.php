<x-layout title="home">
    <header class="bg-white shadow"><h1>Food page</h1></header>
    <div class="main" >
    @foreach($foods as $food)
        <div class="recipe">
            <h2><a href="show/{{$food->id}}">{{$food->name}}</a></h2>
            <div class="img"><img alt="img" src="{{$food->image}}"></div>
            <p>{{$food->short_description}}</p>
            <p>Average Rating: {{ ($food->ratings != null && $food->ratings->count() > 0) ? round($food->ratings->avg('rating'),1) : 'No ratings yet' }}</p>
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