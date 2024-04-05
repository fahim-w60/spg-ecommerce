<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('ec_product_with_attribute_sets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('attribute_set_id')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->tinyInteger('order')->nullable();
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('attribute_set_id')->references('id')->on('ec_product_attribute_sets')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('ec_products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ec_product_with_attribute_sets');
    }
};
