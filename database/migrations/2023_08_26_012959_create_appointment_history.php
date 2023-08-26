<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment_history', function (Blueprint $table) {
            $table->id();
            $table->integer('appointment_id');
            $table->integer('prescription_id')->nullable();
            $table->integer('user_id');
            $table->integer('doctor_id');
            $table->string('name');
            $table->string('age');
            $table->string('blood_group');
            $table->string('starting_time');
            $table->string('description')->nullable();
            $table->string('type')->default('online');
            $table->string('gender')->default('male');
            $table->string('previous_prescription',300)->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointment_history');
    }
}
