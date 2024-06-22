<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\CategoriesController;

/**
 * Categories Routes
 */

Route::group([
    'middlware' => ['auth', 'verified'],
    'prefix' => 'dashboard',
    'as' => 'dashboard.'
], function () {
    Route::resource('/categories', CategoriesController::class);
});
