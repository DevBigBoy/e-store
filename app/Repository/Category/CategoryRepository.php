<?php

namespace App\Repository\Category;

use App\Interfaces\Category\CategoryRepositoryInterface;
use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface
{

    public function getAll(array $filters)
    {
        return Category::with(['parent:id,name'])
            ->latest()
            ->paginate(10);
    }

    public function getParentCategories()
    {
        return Category::whereNull('parent_id')->get();
    }
}
