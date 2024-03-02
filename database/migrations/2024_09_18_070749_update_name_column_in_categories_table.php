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
        Schema::table('categories', function (Blueprint $table) {
            // Rename 'name' to 'name_en'
            $table->renameColumn('name', 'name_en');

            // Add `name_ar` for Arabic names
            $table->string('name_ar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            // Revert the 'name_en' column back to 'name'
            $table->renameColumn('name_en', 'name');

            // Remove the 'name_ar' column
            $table->dropColumn('name_ar');
        });
    }
};