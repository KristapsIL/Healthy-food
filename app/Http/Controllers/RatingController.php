<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use App\Models\Food;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function store(Request $request, Food $food)
    {
        $rating = Rating::firstOrNew([
            'user_id' => $request->user()->id,
            'food_id' => $food->id,
        ]);

        $rating->rating = $request->rating;

        $rating->save();

        return back();
    }
    public function update(Request $request, Food $food)
    {
        $rating = Rating::where('user_id', $request->user()->id)
            ->where('food_id', $food->id)
            ->first();
        $rating->rating = $request->rating;
        $rating->save();

        return back();
    }
}
