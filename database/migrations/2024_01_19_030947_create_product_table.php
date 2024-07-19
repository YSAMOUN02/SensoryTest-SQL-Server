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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('item_code')->nullable();
            $table->string('name')->nullable();
            $table->string('variant')->nullable();
            $table->longText('description')->nullable();
            $table->string('lot_no')->nullable();
            $table->date('manufacturing_date')->nullable();
            $table->string('category')->nullable();
            $table->string('lot_tracking')->nullable(); 
            $table->string('size')->nullable();
            $table->longText('thumbnail')->nullable();           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
