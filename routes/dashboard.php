<?php

use App\Http\Controllers\Admin\Category\CategoryContoller;
use App\Http\Controllers\Admin\Product\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\Profile\ProfileController;

/**
 * Categories Routes
 */

Route::group([
    'middleware' => ['auth'],
    'prefix' => 'dashboard',
    'as' => 'dashboard.'
], function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    /** Categories Routes */
    Route::get('/categories/trash', [CategoryContoller::class, 'trash'])->name('categories.trash');
    Route::put('/categories/{category}/restore', [CategoryContoller::class, 'restore'])->name('categories.restore');
    Route::delete('/categories/{category}/force-delete', [CategoryContoller::class, 'forceDelete'])->name('categories.forcedelete');
    Route::resource('/categories', CategoryContoller::class);


    Route::resource('products', ProductController::class);
});
