<x-layout title="home">
    <div class="main">
        <div>
            <h2>{{$food->name}}</h2>
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
            @if(Auth::user()->id == $food->user_id || Auth::user()->usertype === 'admin')
                <form action="/edit/{{$food->id}}">
                    <button>Edit</button>
                </form>
                <form method="POST" action="/delete/{{$food->id}}">
                    @csrf
                    @method('delete')
                    <button>Delete</button>
                </form>
            @endif
        @endauth
        </div>
    </div>
</x-layout>