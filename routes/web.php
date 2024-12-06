<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\MovementController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get("/", HomeController::class)->name("home");
Route::resource("/products",ProductController::class);
Route::get("/poducts/pdf/{id}",[ProductController::class, "pdf"])->name("pdf");
//Route::resource("/movements", MovementController::class);


Route::resource("/login",LoginController::class);
Route::resource("/register",LoginController::class);
