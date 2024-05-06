<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Bookmark;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{   
    public function index(Request $request)
    {
        $bookmarks = $request->user()->bookmarks()->with('food')->get();
        return view('bookmark.index', ['bookmarks' => $bookmarks]);
    }
    public function store(Request $request, $id)
    {
        $food = Food::find($id);
        $bookmark = new Bookmark;
        $bookmark->user_id = $request->user()->id;
        $bookmark->food_id = $food->id;
    
        $bookmark->save();
    
        return back();
    }
    public function destroy(Request $request, $id){
        $bookmark = Bookmark::where('user_id', $request->user()->id)
            ->where('food_id', $id)
            ->first();
        $bookmark->delete();
        return back();
    }
}
