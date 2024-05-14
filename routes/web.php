<?php

use App\Http\Controllers\ProfileController;
use App\HTTP\Controllers\FoodController;
use App\HTTP\Controllers\HomeController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\RatingController;
use Illuminate\Support\Facades\Route;

Route::get("/", [FoodController::class, "home"]);
Route::get("/show/{id}", [FoodController::class, "show"]);
Route::get("/search", [FoodController::class, "search"]);
Route::get("/foods", [FoodController::class, "index"]);

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get("/edit/{id}", [FoodController::class, "edit"]);
    Route::get("/create", [FoodController::class, "create"]);
    Route::post("/store", [FoodController::class, "store"]);
    Route::put("/update/{id}", [FoodController::class, "update"]);
    Route::delete("/delete/{id}", [FoodController::class, 'delete']);

    Route::post('/foods/{id}/bookmarks', [BookmarkController::class, 'store']);
    Route::delete('/foods/{id}/bookmarks', [BookmarkController::class, 'destroy']);
    Route::get('/bookmarks', [BookmarkController::class, 'index']);

    Route::post('/foods/{food}/ratings', [RatingController::class, 'store']);
    Route::put('/foods/{food}/ratings', [RatingController::class, 'update']);
});

require __DIR__.'/auth.php';

Route::middleware('auth','admin')->group(function (){
    Route::get('admin/dashboard', [HomeController::class, 'index']);
});
