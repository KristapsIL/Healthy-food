
<x-layout title="home">
    <header class="bg-white shadow"><h1>Your Bookmarks</h1></header>
    <div class="main" >
    @foreach ($bookmarks as $bookmark)
        <div class="recipe">
            <h2><a href="show/{{$bookmark->food->id}}">{{$bookmark->food->name}}</a></h2>
            <div class="img"><img alt="img" src="{{$bookmark->food->image}}"></div>
            <p>{{$bookmark->food->short_description}}</p>
            <p>Rating: {{ ($bookmark->food->ratings != null && $bookmark->food->ratings->count() > 0) ? round($bookmark->food->ratings->avg('rating'),1) : 'No ratings yet' }}</p>
            @auth
                @if(Auth::user()->hasBookmarked($bookmark->food->id))
                    <form action="/foods/{{ $bookmark->food->id }}/bookmarks" method="POST" class="form-book">
                        @csrf
                        @method('DELETE')
                        <button class="bookmark" type="submit">Remove Bookmark</button>
                    </form>
                @else
                    <form action="/foods/{{ $bookmark->food->id }}/bookmarks" method="POST" class="form-book">
                        @csrf
                        <button class="bookmark" type="submit">Bookmark</button>
                    </form>
                @endif
            @endauth
        </div>
    @endforeach
</x-layout>