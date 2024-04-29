<x-layout title="home">
    <h1>Food page</h1>
    @foreach($foods as $food)
        <div>
            <h2>{{$food->name}}</h2>
            <p>{{$food->description}}</p>
            <p>{{$food->recipe}}</p>
        </div>
    @endforeach
</x-layout>