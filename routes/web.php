<?php

use App\HTTP\Controllers\FoodController;
use Illuminate\Support\Facades\Route;

Route::get("/", [FoodController::class, "index"]);
Route::get("/create", [FoodController::class, "create"]);
Route::post("/store", [FoodController::class, "store"]);

Route::delete("/delete/{id}", [FoodController::class, 'delete']);