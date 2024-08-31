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
    Route::get('/categories/trash', [CategoriesController::class, 'trash'])->name('categories.trash');
    Route::put('/categories/{category}/restore', [CategoriesController::class, 'restore'])->name('categories.restore');
    Route::delete('/categories/{category}/force-delete', [CategoriesController::class, 'forceDelete'])->name('categories.forcedelete');
    Route::resource('/categories', CategoriesController::class);
});
