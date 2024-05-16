<x-layout title="Add recipe">
    <h1>Edit the Reicpe</h1>
    <div class="add-main">
        <form method="Post" action="/update/{{$food->id}}" class="add">
        @csrf
        @method('PUT')
            <label>The name of the recipe
                <input name="name" value="{{ $food->name }}">
            </label>
            <label>Images url from the web
                <input name="image" value="{{ $food->image}}">
            </label>
            <label>A short description of the recipe
                <textarea name="short_description">{{ $food->short_description}}</textarea>
            </label>
            <label>The description of the recipe
                <textarea name="description" >{{ $food->description }}</textarea>
            </label>
            <label>Ingredients for the recipe
                <textarea name="ingredients">{{ $food->ingredients }}</textarea>
            </label>
            <label>The recipe
                <textarea name="recipe">{{ $food->recipe}}</textarea>
            </label>
            <button>Add</button>
        </form>
    </div>
</x-layout>