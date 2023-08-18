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
        Schema::create('employee_languages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('language');
            $table->foreignId('employee_id')->constrained('employees');
            $table->string('read');
            $table->string('writing');
            $table->string('speak');
            $table->string('attachment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_languages');
    }
};
