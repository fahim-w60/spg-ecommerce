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
    Schema::create('ec_product_attributes', function (Blueprint $table) {
        $table->id();
        $table->bigInteger('attribute_set_id')->unsigned();
        $table->string('title', 120);
        $table->string('slug', 120);
        $table->string('color', 50)->nullable();
        $table->string('image', 191)->nullable();
        $table->tinyInteger('is_default')->default(0);
        $table->tinyInteger('order')->default(0);
        $table->string('status', 60)->nullable();
        $table->timestamps();
        
        $table->foreign('attribute_set_id')->references('id')->on('ec_product_attribute_sets')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ec_product_attributes');
    }
};
