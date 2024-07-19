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
        Schema::create('test_method', function (Blueprint $table) {
            $table->id();
            $table->string("test_group")->nullable();
            $table->string("test_title")->nullable();
            $table->string("method_type")->nullable();
            $table->string("parameter_id")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_method');
    }
};
