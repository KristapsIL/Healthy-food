<x-layout title="home">
    <header class="bg-white shadow"><h1>Recipes</h1></h1></header>
    <div class="main" >
    @foreach($foods as $food)
        <div class="recipe">
            <h2><a href="show/{{$food->id}}">{{$food->name}}</a></h2>
            <div class="img"><img alt="img" src="{{$food->image}}"></div>
            <p>{{$food->short_description}}</p>
            <p>Rating: {{ ($food->ratings != null && $food->ratings->count() > 0) ? round($food->ratings->avg('rating'),1) : 'No ratings yet' }}</p>
            @auth
                @if(Auth::user()->hasBookmarked($food->id))
                    <form action="/foods/{{ $food->id }}/bookmarks" method="POST" class="form-book">
                        @csrf
                        @method('DELETE')
                        <button class="bookmark" type="submit">Remove Bookmark</button>
                    </form>
                @else
                    <form action="/foods/{{ $food->id }}/bookmarks" method="POST" class="form-book">
                        @csrf
                        <button class="bookmark" type="submit">Bookmark</button>
                    </form>
                @endif
            @endauth
        </div>
    @endforeach
</x-layout>