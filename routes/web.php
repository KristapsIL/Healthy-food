<?php

use App\HTTP\Controllers\FoodController;
use Illuminate\Support\Facades\Route;

Route::get("/", [FoodController::class, "index"]);
Route::get("/edit/{id}", [FoodController::class, "edit"]);
Route::get("/show/{id}", [FoodController::class, "show"]);
Route::get("/create", [FoodController::class, "create"]);

Route::post("/store", [FoodController::class, "store"]);
Route::put("/update/{id}", [FoodController::class, "update"]);
Route::delete("/delete/{id}", [FoodController::class, 'delete']);