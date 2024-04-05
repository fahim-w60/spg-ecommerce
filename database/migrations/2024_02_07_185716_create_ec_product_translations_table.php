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
        Schema::create('ec_product_translations', function (Blueprint $table) {
            $table->id();
            $table->string('lang_code', 191);
            $table->unsignedBigInteger('ec_products_id');
            $table->string('translation_name', 191)->nullable();
            $table->text('description')->nullable();
            $table->text('content')->nullable();
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('ec_products_id')->references('id')->on('ec_products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ec_product_translations');
    }
};
