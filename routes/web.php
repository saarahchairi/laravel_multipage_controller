<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProductsController;

Route::get('/', [WelcomeController::class,"welcome"])->name("home");

Route::get('/about', [AboutController::class,"about"])->name("about");

Route::get('/products', [ProductsController::class,"products"])->name("products");

Route::get('/store', [StoreController::class,"store"])->name("store");
