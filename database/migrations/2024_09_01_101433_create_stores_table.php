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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();

            $table->string('shop_name_en')->unique();
            $table->string('shop_name_ar')->nullable()->unique();

            $table->string('slug')->unique();

            $table->string('email')->nullable()->unique();
            $table->string('phone')->nullable()->unique();

            $table->text('description')->nullable();
            $table->string('address')->nullable();

            $table->string('logo_image')->nullable();
            $table->string('cover_image')->nullable();

            $table->enum('status', ['active', 'suspended'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
