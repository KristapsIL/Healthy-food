<x-layout title="home">
        <div>
            <h1>{{$food->name}}</h1>
            <p>{{$food->description}}</p>
            <p>{{$food->recipe}}</p>
            <form action="/edit/{{$food->id}}">
                <button>Edit</button>
            </form>
            <form method="POST" action="/delete/{{$food->id}}">
                @csrf
                @method('delete')
                <button>Delete</button>
            </form>
        </div>
</x-layout>