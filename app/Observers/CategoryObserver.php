<?php

namespace App\Observers;

use App\Models\Category;
use Illuminate\Support\Str;
use App\Mail\DeleteCategory;
use Illuminate\Support\Facades\Mail;

class CategoryObserver
{

    public function creating(Category $category)
    {
        if (empty($category->slug)) {
            // Generate a slug from the category's name
            $category->slug = Str::slug($category->name);
        }
    }
    /**
     * Handle the Category "created" event.
     */
    public function created(Category $category): void
    {
        //
    }

    /**
     * Handle the Category "updated" event.
     */
    public function updated(Category $category): void
    {
        //
    }

    /**
     * Handle the Category "deleted" event.
     */
    public function deleted(Category $category): void
    {
        // all the logic insside this method will exceute after the deletion process

        // Mail::to('sara@gmail.com')->send(new DeleteCategory($category));
    }

    /**
     * Handle the Category "restored" event.
     */
    public function restored(Category $category): void {}

    /**
     * Handle the Category "force deleted" event.
     */
    public function forceDeleted(Category $category): void
    {
        //
    }
}