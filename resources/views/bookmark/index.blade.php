
    <h1>Your Bookmarks</h1>

    @foreach ($bookmarks as $bookmark)
        <div>
            <h2>{{ $bookmark->food->name }}</h2>
            <p>{{ $bookmark->food->description }}</p>
            <form action="/foods/{{ $bookmark->food->id }}/bookmarks" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Remove Bookmark</button>
            </form>
        </div>
    @endforeach
