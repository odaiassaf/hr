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
        Schema::create('employee_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->enum('type', ['leave', 'time-off', 'schedule-change', 'overtime', 'training', 'equipment', 'travel', 'expense', 'promotion', 'assistance'])->index();
            $table->date('request_date');
            $table->boolean('approved')->default(false);
            $table->text('description')->nullable();
            // Note-  Define foreign key constraint
            $table->foreignId('employee_id')->constrained('employees');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_requests');
    }
};
