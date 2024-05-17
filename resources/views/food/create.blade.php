<x-layout title="Add recipe">
    <h1>Add a Recipe</h1>
    <div class="add-main">
        <form method="Post" action="store" class="add">
        @csrf
            <label>The name of the recipe
                <input name="name">
                @if ($errors->has('name'))
                <div class="alert alert-danger">
                    <strong>{{ $errors->first('name') }}</strong>
                </div>
                @endif
            </label>
            <label>Image url from the web
                <input name="image">
                @if ($errors->has('image'))
                <div class="alert alert-danger">
                    <strong>{{ $errors->first('image') }}</strong>
                </div>
                @endif
            </label>
            <label>A short description of the recipe
                <textarea type="text" name="short_description"></textarea>
                @if ($errors->has('description'))
                <div class="alert alert-danger">
                    <strong>{{ $errors->first('short_description') }}</strong>
                </div>
                @endif
            </label>
            <label>The description of the recipe
                <textarea type="text" name="description"></textarea>
                @if ($errors->has('description'))
                <div class="alert alert-danger">
                    <strong>{{ $errors->first('description') }}</strong>
                </div>
                @endif
            </label>
            <label>Ingredients for the recipe
                <textarea type="text" name="ingredients"></textarea>
                @if ($errors->has('ingredients'))
                <div class="alert alert-danger">
                    <strong>{{ $errors->first('ingredients') }}</strong>
                </div>
                @endif
            </label>
            <label>The recipe
                <textarea type="text" name="recipe"></textarea>
                @if ($errors->has('description'))
                <div class="alert alert-danger">
                    <strong>{{ $errors->first('recipe') }}</strong>
                </div>
                @endif
            </label>
            <button>Add</button>
        </form>
    </div>
</x-layout>