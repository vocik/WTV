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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string("product_code");
            $table->string("product_price");
            $table->string("type");
            $table->integer("doba_zaruky");
            $table->integer("pocet");
            $table->string("extra");
            $table->unsignedBigInteger("doklad_id");
            $table->foreign("doklad_id")->references("id")->on("doklads");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
