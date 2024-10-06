<?php

namespace App\Interfaces\Category;

interface CategoryRepositoryInterface
{
    public function getAll(array $filters);

    public function getParentCategories();
}
