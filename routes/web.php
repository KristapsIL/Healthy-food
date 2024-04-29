<?php

use App\Http\Controllers\ProfileController;
use App\HTTP\Controllers\FoodController;
use Illuminate\Support\Facades\Route;

Route::get("/", [FoodController::class, "index"]);
Route::get("/show/{id}", [FoodController::class, "show"]);


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
});

require __DIR__.'/auth.php';
