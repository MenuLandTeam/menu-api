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
        Schema::table('shops', function (Blueprint $table) {
            $table->string('background')->nullable()->after('image');
            $table->string('short_description')->nullable()->after('background');
            $table->integer('rate')->nullable()->after('tel');
            $table->string('opacity')->nullable()->after('rate');
            $table->string('address')->nullable()->after('opacity');
            $table->boolean('has_delivery')->nullable()->after('location');
            $table->boolean('has_indoor')->nullable()->after('has_delivery');
            $table->boolean('has_openspace')->nullable()->after('has_indoor');
            $table->boolean('is_close')->default(0)->after('is_active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('shops', function (Blueprint $table) {
            //
        });
    }
};
