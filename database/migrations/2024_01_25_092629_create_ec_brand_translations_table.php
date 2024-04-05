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
        Schema::create('ec_brand_translations', function (Blueprint $table) {
            $table->id();
            $table->string('lang_code', 191);
            $table->unsignedBigInteger('ec_brands_id');
            $table->string('name', 191)->nullable();
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign('ec_brands_id')->references('id')->on('ec_brands')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ec_brand_translations');
    }
};
