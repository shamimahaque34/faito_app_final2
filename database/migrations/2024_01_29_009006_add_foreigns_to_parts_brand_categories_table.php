<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('parts_brand_categories', function (Blueprint $table) {
            $table
                ->foreign('parts_parent_brand_id')
                ->references('id')
                ->on('parts_parent_brands')
                ->onDelete('CASCADE');

            $table
                ->foreign('parts_brand_category_id')
                ->references('id')
                ->on('parts_brand_categories')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('parts_brand_categories', function (Blueprint $table) {
            $table->dropForeign(['parts_parent_brand_id']);
            $table->dropForeign(['parts_brand_category_id']);
        });
    }
};
