
    <h1>Your Bookmarks</h1>

    @foreach ($bookmarks as $bookmark)
        <div>
            <h2>{{ $bookmark->food->name }}</h2>
            <p>{{ $bookmark->food->description }}</p>
        </div>
    @endforeach
