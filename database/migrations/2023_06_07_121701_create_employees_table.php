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
        Schema::create('employees', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth')->nullable()->index();
            $table->date('start_date')->nullable()->index();
            $table->date('leaving_date')->nullable()->index();
            $table->string('social_security_number')->unique();
            $table->string('id_number')->unique();
            $table->string('home_address')->nullable();
            $table->string('phone_number');
            $table->string('passport_no');
            $table->string('passport_expiry_date')->nullable();
            $table->string('tel')->nullable();
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('employment_of_spouse')->nullable();
            $table->string('children')->nullable();
            $table->string('email')->unique();
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_phone_number')->nullable();
            $table->string('citizenship')->index()->nullable();
            $table->string('gender')->index();;
            $table->boolean('is_disabled')->default(false)->index();
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('image')->nullable();
            $table->string('attachemnt')->nullable();
            $table->string('cv')->nullable();
            $table->string('avatar')->nullable();
            $table->string('id_image1')->nullable();
            $table->string('id_image2')->nullable();
            $table->timestamps();
            $table->string('employment_status')->index();
            $table->string('evaluation')->index()->nullable();
            ///NOTE - foreign keys   
            $table->foreignId('position_id')->constrained('positions');
            $table->foreignId('department_id')->constrained('departments')->nullable();
            $table->foreignId('manager_id')->constrained('employees');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('employment_announcement_id')->constrained('employment_announcements');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
