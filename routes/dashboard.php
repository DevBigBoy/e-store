<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\CategoriesController;

/**
 * Categories Routes
 */
Route::resource('dashboard/categories', CategoriesController::class)->middleware(['auth', 'verified']);