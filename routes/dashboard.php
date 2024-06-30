<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\CategoriesController;

/**
 * Categories Routes
 */

Route::group([
    'middleware' => ['auth'],
    'prefix' => 'dashboard',
    'as' => 'dashboard.'
], function () {
    Route::resource('/categories', CategoriesController::class);
});