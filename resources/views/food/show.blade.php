<x-layout title="home">
        <div>
            <h1>{{$food->name}}</h1>
            <p>{{$food->description}}</p>
            <p>{{$food->recipe}}</p>
            <form action="/edit/{{$food->id}}">
                <button>Edit</button>
            </form>
            @auth
            @if(Auth::user()->id == $food->user_id || Auth::user()->usertype === 'admin')
                <form method="POST" action="/delete/{{$food->id}}">
                    @csrf
                    @method('delete')
                    <button>Delete</button>
                </form>
            @endif
        @endauth
        </div>
</x-layout>