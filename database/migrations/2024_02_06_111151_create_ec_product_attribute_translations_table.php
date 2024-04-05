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
        Schema::create('ec_product_attribute_translations', function (Blueprint $table) {
            $table->id();
            $table->string('lang_code', 191);
            $table->unsignedBigInteger('attribute_id');
            $table->string('title', 191);
            $table->timestamps();
    
            // Foreign key constraint
            $table->foreign('attribute_id')->references('id')->on('ec_product_attributes')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ec_product_attribute_translations');
    }
};
