<x-layout title="home">
    <div class="main">
        <div class="recipe">
            <h2>{{$food->name}}</h2>
                <div class="img"><img alt="img" src="{{$food->image}}"></div>
            <div>
                <h3>Description</h3>
                <p>{{$food->description}}</p>
            </div>
            <div>
                <h3>Ingredients</h3>
                <p>{{$food->ingredients}}</p>
            </div>
            <div>
                <h3>Recipe</h3>
                <p>{{$food->recipe}}</p>
            </div>
            <p>Rating: {{ ($food->ratings != null && $food->ratings->count() > 0) ? round($food->ratings->avg('rating'),1) : 'No ratings yet' }}</p>
            <form action="/foods/{{ $food->id }}/ratings" method="POST" class="form-rate">
                @csrf
                <input class="rate-input" type="number" name="rating" min="1" max="5">
                <button type="submit" class="rate-but">Rate</button>
            </form>
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
            @if(Auth::user()->id == $food->user_id || Auth::user()->usertype === 'admin')
                <form action="/edit/{{$food->id}}" class="form-edit">
                    <button class="edit-but">Edit</button>
                </form>
                <form method="POST" action="/delete/{{$food->id}}" class="form-delete">
                    @csrf
                    @method('delete')
                    <button class="delete-but">Delete</button>
                </form>
            @endif
        @endauth
        </div>
    </div>
</x-layout>