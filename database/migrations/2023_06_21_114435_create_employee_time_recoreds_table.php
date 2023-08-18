<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Carbon;

return new class extends Migration
{

    /**
     * Run the migrations.
     */
    public function up(): void
    {
            Schema::create('employee_time_recoreds', function (Blueprint $table) {
            $currentDateTime = Carbon::now();
         // Get the current time in a specific format
          $formattedTime = $currentDateTime->format('H:i:s');
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->foreignId('employee_id')->constrained('employees');
            $table->date('recored_date')->default(now());
            $table->enum('type',['in','out','vacation','Justified leave','UnJustified leave','mission','Sick leave','time out']);
            $table->time('recored_time')->default($formattedTime);
            $table->text('descrption')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_time_recoreds');
    }
};
