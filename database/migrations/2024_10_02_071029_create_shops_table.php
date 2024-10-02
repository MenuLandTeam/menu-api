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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('province_id')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('name')->nullable();
            $table->string('bio')->nullable();
            $table->string('image')->nullable();
            $table->string('description')->nullable();
            $table->string('start_time')->nullable();
            $table->string('end_time')->nullable();
            $table->string('manager_name')->nullable();
            $table->string('manager_phone')->nullable();
            $table->string('tel')->nullable();
            $table->string('location')->nullable();
            $table->boolean('is_active')->default(1);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('province_id')->references('id')->on('provinces')->cascadeOnUpdate()->nullOnDelete();
            $table->foreign('city_id')->references('id')->on('cities')->cascadeOnUpdate()->nullOnDelete();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnUpdate()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
