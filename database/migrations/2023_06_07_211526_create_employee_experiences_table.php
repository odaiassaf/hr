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
        Schema::create('employee_experiences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('position');
            $table->string('organization')->nullable();
            $table->string('contract_type');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('leave_reason')->nullable();
            $table->text('description')->nullable();
            $table->foreignId('employee_id')->constrained('employees');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_experiences');
    }
};
