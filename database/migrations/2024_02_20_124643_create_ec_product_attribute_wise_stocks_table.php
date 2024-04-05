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
        Schema::create('ec_product_attribute_wise_stocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('ec_products')->onDelete('cascade');
            $table->foreignId('attribute_id')->constrained('ec_product_attributes')->onDelete('cascade');
            $table->decimal('price', 10, 2)->nullable();
            $table->decimal('sale_price', 10, 2)->nullable();
            $table->bigInteger('stock')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->timestamps();
        });
    }

  
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ec_product_attribute_wise_stocks');
    }
};
