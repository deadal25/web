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
            $table->string('image_store')->nullable();
            $table->string('nama_store')->nullable();
            $table->string('description_store')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('category')->nullable();
            $table->string('quantity')->nullable();
            $table->string('price')->nullable();
            $table->string('discount_price')->nullable();
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
