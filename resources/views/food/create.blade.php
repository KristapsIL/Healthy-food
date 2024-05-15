<x-layout title="Add recipe">
    <h1>Add a Recipe</h1>
    <div class="add">
        <form method="Post" action="store" class="add">
        @csrf
            <label>Name
                <input name="name">
            </label>
            <label>Image
                <input name="image">
            </label>
            <label>short_description
                <input name="short_description">
            </label>
            <label>description
                <input name="description">
            </label>
            <label>Ingredients
                <input name="ingredients">
            </label>
            <label>Recipe
                <input name="recipe">
            </label>
            <button>Add</button>
        </form>
    </div>
</x-layout>