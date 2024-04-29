<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index(){
        $foods = Food::all();
        return view("food.index", ["foods" => $foods]);
    }
    public function create(){
        return view("food.create");
    }
    public function store(Request $request){
        $food = new Food();
        $food->name = $request->name;
        $food->description = $request->description;
        $food->recipe = $request->recipe;
        $food->save();
        return redirect("/");

    }
}
