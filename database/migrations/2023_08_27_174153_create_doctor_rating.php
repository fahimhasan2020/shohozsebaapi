<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorRating extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_rating', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('doctor_id');
            $table->integer('appointment_id');
            $table->integer('rating')->default(1);
            $table->text('comment')->nullable();
            $table->integer('visible')->default(1);
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
        Schema::dropIfExists('doctor_rating');
    }
}
