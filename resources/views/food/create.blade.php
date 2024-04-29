<x-layout title="Add recipe">
    <h1>Add a food</h1>
    <form method="Post" action="store">
    @csrf
        <label>Name
            <input name="name">
        </label>
        <label>description
            <input name="description">
        </label>
        <label>Recipe
            <input name="recipe">
        </label>
        <button>Add</button>
    </form>

</x-layout>