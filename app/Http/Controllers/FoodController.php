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
}
