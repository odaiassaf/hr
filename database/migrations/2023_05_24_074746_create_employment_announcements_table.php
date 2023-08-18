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
        Schema::create('employment_announcements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->index();
            $table->string('position_title')->nullable();
            $table->foreignId('department_id')->constrained('departments');
            $table->text('body')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->date('publish_date')->nullable();
            $table->smallInteger('years_of_experience')->nullable();
            $table->string('country')->nullable();
            $table->string('type')->nullable();
            $table->string('city')->nullabe();
            $table->string('image_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employment_announcements');
    }
};
