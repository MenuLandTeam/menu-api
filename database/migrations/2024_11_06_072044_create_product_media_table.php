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
        Schema::create('product_media', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shop_product_id')->nullable();
            $table->string('type')->nullable();
            $table->string('file')->nullable();
            $table->string('url')->nullable();
            $table->string('path')->nullable();
            $table->string('size')->nullable();
            $table->string('format')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->boolean('ia_active')->default(1);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('shop_product_id')->references('id')->on('shop_product')->cascadeOnUpdate()->nullOnDelete();
            $table->foreign('created_by')->references('id')->on('users')->cascadeOnUpdate()->nullOnDelete();
            $table->foreign('updated_by')->references('id')->on('users')->cascadeOnUpdate()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_media');
    }
};
