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
        Schema::create('employee_studies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jurisdiction')->index();
            $table->date('start_date');
            $table->date('end_date');
            $table->string('level')->nullable();
            $table->string('university');
            $table->foreignId('employee_id')->constrained('employees');
            $table->string('attachment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_studies');
    }
};
