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
        Schema::create('rating_test', function (Blueprint $table) {
            $table->id();
            $table->string("test_id")->nullable();
            $table->string('product_group_id');
            $table->string("parameter_id")->nullable();
            $table->string("employee_id")->nullable();
            $table->string("value")->nullable();
            $table->string("value1_option1")->nullable();
            $table->string("value1_option2")->nullable();
            $table->string("value1_option3")->nullable();
            $table->string("value1_option4")->nullable();
            $table->string("value1_option5")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rating_test');
    }
};
