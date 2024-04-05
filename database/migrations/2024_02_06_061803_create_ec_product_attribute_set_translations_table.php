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
        Schema::create('ec_product_attribute_set_translations', function (Blueprint $table) {
            $table->id();
            $table->string('lang_code', 191)->nullable();
            $table->unsignedBigInteger('attribute_set_id')->nullable();
            $table->foreign('attribute_set_id')->references('id')->on('ec_product_attribute_sets')->onDelete('cascade');
            $table->string('title', 191)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ec_product_attribute_set_translations');
    }
};
