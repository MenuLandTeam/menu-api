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
        Schema::create('shop_categories_product_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shop_category_id')->nullable();
            $table->unsignedBigInteger('product_category_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('shop_category_id')->references('id')->on('shop_categories')->cascadeOnUpdate()->nullOnDelete();
            $table->foreign('product_category_id')->references('id')->on('product_categories')->cascadeOnUpdate()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop_categories_product_categories');
    }
};
