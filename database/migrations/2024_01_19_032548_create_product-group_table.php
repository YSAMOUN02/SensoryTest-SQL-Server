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
        Schema::create('product_group', function (Blueprint $table) {
            $table->id();
            $table->string('test_id');
            $table->string('product_id');
            $table->string('item_code')->nullable();
            $table->string('product_name')->nullable();
            $table->string('variant')->nullable();
            $table->string('lot')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_group');
    }
};
