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
    public function show($id){
        $food = Food::find($id);
        return view("food.show", ["food" => $food]);
    }
    public function create(){
        return view("food.create");
    }
    public function store(Request $request){
        $data = $request->only(['name', 'description', 'recipe']);
        Food::create($data);
        return redirect("/");
    }
    public function edit($id){
        $food = Food::find($id);
        return view("food.edit", ["food" => $food]);
    }
    public function update(Request $request, $id){
        Food::find($id)->update($request->all());
        return redirect('/');
    }
    public function delete($id){
        Food::destroy($id);
        return redirect("/");
    }

}
