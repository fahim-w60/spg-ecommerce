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
        Schema::create('ec_product_categories_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categories_id');
            $table->string('lang_code', 191);
            $table->string('name', 191);
            $table->mediumText('description');
            $table->timestamps();
    
            $table->foreign('categories_id')->references('id')->on('ec_product_categories')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ec_product_categories_translations');
    }
};
