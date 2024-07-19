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
        Schema::create('employee_group', function (Blueprint $table) {
            $table->id();
            $table->string('test_id')->nullable();
            $table->string('id_em')->nullable();
            $table->string('serail')->nullable();
            $table->string('idem')->nullable();
            $table->string('name')->nullable();
          
            $table->date('dob')->nullable();
            $table->string('position')->nullable();
            $table->string('department')->nullable();
            $table->longText('remark')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_group');
    }
};
