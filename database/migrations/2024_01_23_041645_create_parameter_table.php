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
        Schema::create('parameter', function (Blueprint $table) {
            $table->id();
            $table->string("test_id")->nullable();
            $table->string("main")->nullable();
            $table->string("same_main")->nullable();
            $table->string("option1")->nullable();
            $table->string("option2")->nullable();
            $table->string("option3")->nullable();
            $table->string("option4")->nullable();
            $table->string("label_main")->nullable();
            $table->string("label1")->nullable();
            $table->string("label2")->nullable();
            $table->string("label3")->nullable();
            $table->string("label4")->nullable();
            $table->string("add_on1")->nullable();
            $table->string("add_on2")->nullable();
            $table->string("add_on3")->nullable();
            $table->string("add_on4")->nullable();
            $table->string("add_on5")->nullable();
            $table->string("add_on6")->nullable();
            $table->string("add_on7")->nullable();
            $table->string("add_on8")->nullable();
            $table->string("add_on9")->nullable();
            $table->string("value1")->nullable();
            $table->string("value2")->nullable();
            $table->string("value3")->nullable();
            $table->string("value4")->nullable();
            $table->string("value5")->nullable();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parameter');
    }
};
