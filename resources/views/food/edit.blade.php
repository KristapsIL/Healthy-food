<x-layout title="Add recipe">
    <h1>Edit {{$food->Name}}</h1>
    <form method="POST" action="/update/{{$food->id}}">
    @csrf
    @method('PUT')
        <label>Name
            <input name="name" value="{{ $food->name }}">
        </label>
        <label>description
            <input name="description" value="{{ $food->description }}">
        </label>
        <label>Recipe
            <input name="recipe" value="{{ $food->recipe }}">
        </label>
        <button>edit</button>
    </form>
</x-layout>