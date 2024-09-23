<?php

namespace App\Rules;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ChildCategory implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // Check if the category exists
        $category = Category::find($value);

        // Check if it has a parent_id
        if (!$category || $category->parent_id === null) {
            $fail('The selected category must be a child category.');
        }
    }
}
