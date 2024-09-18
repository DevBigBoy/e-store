<?php

// database/seeders/CategorySeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Root categories (parent categories)
        $parentCategories = [
            ['name' => 'Electronics', 'description' => 'All kinds of electronics', 'status' => 'active'],
            ['name' => 'Fashion', 'description' => 'Clothing and accessories', 'status' => 'active'],
            ['name' => 'Home & Garden', 'description' => 'Furniture, appliances, and more', 'status' => 'archived'],
        ];

        // Child categories (subcategories for each parent)
        $childCategories = [
            // Electronics Subcategories
            'Electronics' => [
                ['name' => 'Mobile Phones', 'description' => 'Smartphones and accessories', 'status' => 'active'],
                ['name' => 'Laptops', 'description' => 'Laptops and computers', 'status' => 'active'],
            ],
            // Fashion Subcategories
            'Fashion' => [
                ['name' => 'Men\'s Clothing', 'description' => 'Apparel for men', 'status' => 'active'],
                ['name' => 'Women\'s Clothing', 'description' => 'Apparel for women', 'status' => 'archived'],
            ],
            // Home & Garden Subcategories
            'Home & Garden' => [
                ['name' => 'Furniture', 'description' => 'Home and office furniture', 'status' => 'active'],
                ['name' => 'Kitchen Appliances', 'description' => 'Cooking and kitchen tools', 'status' => 'archived'],
            ]
        ];

        // Create parent categories
        foreach ($parentCategories as $parentCategory) {
            $parent = Category::create([
                'name' => $parentCategory['name'],
                'slug' => Str::slug($parentCategory['name']), // Generate slug from name
                'description' => $parentCategory['description'],
                'status' => $parentCategory['status'],
                'image' => null, // You can add actual image paths or URLs here
                'parent_id' => null, // Root category
            ]);

            // Create child categories for each parent
            foreach ($childCategories[$parent->name] as $childCategory) {
                Category::create([
                    'name' => $childCategory['name'],
                    'slug' => Str::slug($childCategory['name']), // Generate slug from name
                    'description' => $childCategory['description'],
                    'status' => $childCategory['status'],
                    'image' => null, // You can add actual image paths or URLs here
                    'parent_id' => $parent->id, // Set the parent_id to the parent category
                ]);
            }
        }
    }
}
