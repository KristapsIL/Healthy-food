<x-layout title="Add recipe">
    <h1>Edit the Reicpe</h1>
    <div class="add-main">
        <form method="Post" action="/update/{{$food->id}}" class="add">
        @csrf
        @method('PUT')
            <label>The name of the recipe
                <input name="name" value="{{ $food->name }}">
                @if ($errors->has('name'))
                <div class="alert alert-danger">
                    <strong>{{ $errors->first('name') }}</strong>
                </div>
                @endif
            </label>
            <label>Images url from the web
                <input name="image" value="{{ $food->image}}">
                @if ($errors->has('image'))
                <div class="alert alert-danger">
                    <strong>{{ $errors->first('image') }}</strong>
                </div>
                @endif
            </label>
            <label>A short description of the recipe
                <textarea name="short_description">{{ $food->short_description}}</textarea>
                @if ($errors->has('description'))
                <div class="alert alert-danger">
                    <strong>{{ $errors->first('short_description') }}</strong>
                </div>
                @endif
            </label>
            <label>The description of the recipe
                <textarea name="description" >{{ $food->description }}</textarea>
                @if ($errors->has('description'))
                <div class="alert alert-danger">
                    <strong>{{ $errors->first('description') }}</strong>
                </div>
                @endif
            </label>
            <label>Ingredients for the recipe
                <textarea name="ingredients">{{ $food->ingredients }}</textarea>
                @if ($errors->has('ingredients'))
                <div class="alert alert-danger">
                    <strong>{{ $errors->first('ingredients') }}</strong>
                </div>
                @endif
            </label>
            <label>The recipe
                <textarea name="recipe">{{ $food->recipe}}</textarea>
                @if ($errors->has('description'))
                <div class="alert alert-danger">
                    <strong>{{ $errors->first('recipe') }}</strong>
                </div>
                @endif
            </label>
            <button>Edit</button>
        </form>
    </div>
</x-layout>