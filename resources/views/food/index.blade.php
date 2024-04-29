<x-layout title="home">
    <h1>Food page</h1>
    @foreach($foods as $food)
        <div>
            <h2>{{$food->name}}</h2>
            <p>{{$food->description}}</p>
            <p>{{$food->recipe}}</p>
            <form method="POST" action="delete/{{$food->id}}">
                @csrf
                @method('delete')
                <button>Delete</button>
            </form>
        </div>
    @endforeach
</x-layout>