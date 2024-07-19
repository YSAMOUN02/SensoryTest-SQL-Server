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
        Schema::create('test_result', function (Blueprint $table) {
            $table->id();
            $table->string("test_id")->nullable();
            $table->string('product_group_id');
            $table->string("parameter_id")->nullable();
            $table->string("method_type")->nullable();
            $table->string("employee_id")->nullable();
            $table->string("user_select")->nullable();
            $table->string("option1")->nullable();
            $table->string("option2")->nullable();
            $table->string("option3")->nullable();
            $table->string("option4")->nullable();
            $table->string("correct_option")->nullable();
            $table->string("correction")->nullable();
            $table->string("user_rank1")->nullable();
            $table->string("user_rank2")->nullable();
            $table->string("user_rank3")->nullable();
            $table->string("user_rank4")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_result');
    }
};
