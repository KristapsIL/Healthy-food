<?php

use App\HTTP\Controllers\FoodController;
use Illuminate\Support\Facades\Route;

Route::get("/", [FoodController::class, "index"]);

