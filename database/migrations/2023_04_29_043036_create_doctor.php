<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique()->nullable();
            $table->string('provider_id')->unique()->nullable();
            $table->string('password',200)->nullable();
            $table->text('description')->nullable();
            $table->integer('department');
            $table->integer('visit');
            $table->string('first_name',200)->nullable();
            $table->string('last_name',200)->nullable();
            $table->string('gender',200)->nullable();
            $table->string('profile_picture',200)->nullable();
            $table->string('blood_group',200)->nullable();
            $table->integer('age')->nullable();
            $table->boolean('suspended')->default(false);
            $table->boolean('blocked')->default(false);
            $table->boolean('deactivated')->default(false);
            $table->dateTime('date_of_birth')->nullable();
            $table->string('phone_number')->nullable()->unique();
            $table->string('remember_token')->nullable();
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
        Schema::dropIfExists('doctor');
    }
}
