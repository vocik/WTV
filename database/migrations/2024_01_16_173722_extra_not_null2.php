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
            Schema::table("products", function (Blueprint $table) {
                $table->dropColumn("extra");
            });
            Schema::table("products", function (Blueprint $table) {
                $table->string("extra")->nullable(false)->default("");
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
