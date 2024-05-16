<x-layout title="Add recipe">
    <h1>Add a Recipe</h1>
    <div class="add-main">
        <form method="Post" action="store" class="add">
        @csrf
            <label>The name of the recipe
                <input name="name">
            </label>
            <label>Images url from the web
                <input name="image">
            </label>
            <label>A short description of the recipe
                <textarea type="text" name="short_description"></textarea>
            </label>
            <label>The description of the recipe
                <textarea type="text" name="description"></textarea>
            </label>
            <label>Ingredients for the recipe
                <textarea type="text" name="ingredients"></textarea>
            </label>
            <label>The recipe
                <textarea type="text" name="recipe"></textarea>
            </label>
            <button>Add</button>
        </form>
    </div>
</x-layout>