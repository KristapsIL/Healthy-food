<x-layout title="home">
    <header><h1>Top Rated recipe</h1></header>
    <div class="main" >
        <div class="recipe">
            <h2><a href="show/{{$top->id}}">{{$top->name}}</a></h2>
            <div class="img"><img alt="img" src="{{$top->image}}"></div>
            <p>{{$top->short_description}}</p>
            <p>Rating: {{ ($top->ratings != null && $top->ratings->count() > 0) ? round($top->ratings->avg('rating'),1) : 'No ratings yet' }}</p>
            @auth
                @if(Auth::user()->hasBookmarked($top->id))
                    <form action="/foods/{{ $top->id }}/bookmarks" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Remove Bookmark</button>
                    </form>
                @else
                    <form action="/foods/{{ $top->id }}/bookmarks" method="POST">
                        @csrf
                        <button type="submit">Bookmark</button>
                    </form>
                @endif
            @endauth
        </div>
    </div>
</x-layout>