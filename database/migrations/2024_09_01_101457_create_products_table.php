<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('title', 255);
            $table->string('slug', 255)->unique();

            $table->text('short_description')->nullable();
            $table->string('image')->nullable();

            $table->decimal('price', 10, 2)->default(0);
            $table->decimal('compare_price', 10, 2)->nullable();


            $table->enum('status', ['active', 'out_of_stock'])->default('active');

            // Inventory Management
            $table->integer('stock_quantity')->default(0);  // Track product stock
            $table->boolean('is_in_stock')->default(true);  // Flag to quickly check if the product is in stock

            $table->boolean('is_featured')->default(false);  // Flag for featured products
            $table->boolean('is_on_sale')->default(false);    // Flag for products on sale

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
