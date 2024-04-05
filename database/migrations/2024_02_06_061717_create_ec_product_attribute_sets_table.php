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
        Schema::create('ec_product_attribute_sets', function (Blueprint $table) {
            $table->id();
            $table->string('title', 120)->nullable();
            $table->string('slug', 120)->nullable();
            $table->string('display_layout', 191)->nullable();
            $table->tinyInteger('is_searchable')->default(0)->nullable();
            $table->tinyInteger('is_comparable')->default(0)->nullable();
            $table->tinyInteger('is_use_in_product_listing')->default(0)->nullable();
            $table->string('status', 60)->nullable();
            $table->tinyInteger('order')->default(0)->nullable();
            $table->tinyInteger('use_image_from_product_variation')->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ec_product_attribute_sets');
    }
};
