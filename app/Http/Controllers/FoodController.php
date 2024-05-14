<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FoodController extends Controller
{   
    public function home(){
        $foods = Food::all();
        $top = $foods->sortByDesc('rating')->first();
        return view("food.home", ["foods" => $foods, "top" => $top]);
    }
    public function index(){
        $foods = Food::with('ratings')->get()->map(function ($food) {
            $food->rating = $food->ratings->avg('rating');
            return $food;
        });
        $foods = Food::all();
        $top = $foods->sortByDesc('rating')->first();
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
        $data = $request->only(['name','image','short_description', 'description', 'recipe']);
        $data['user_id'] = $request->user()->id;
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
    public function delete(Request $request, $id){
        $food = Food::find($id);
        if (Auth::id() !== $food->user_id) {
            return redirect('/')->with('error', 'You are not authorized to delete this recipe.');
        }
        else{Food::destroy($id);}
        return redirect("/");
    }
    public function search(Request $request){
        $search = $request->input('search');
        $foods = Food::where('name', 'like', "%$search%")->get();
        return view("food.index", ["foods" => $foods]);
    }

}
