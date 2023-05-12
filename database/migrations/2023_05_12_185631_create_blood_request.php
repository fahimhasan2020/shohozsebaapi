<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodRequest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_request', function (Blueprint $table) {
            $table->id();
            $table->string('group');
            $table->integer('active')->default(1);
            $table->integer('userId');
            $table->integer('purchagable')->default(0);
            $table->integer('donorId')->nullable();
            $table->string('donorName')->nullable();
            $table->string('donor_lat')->nullable();
            $table->string('donor_lng')->nullable();
            $table->string('userName')->nullable();
            $table->string('phone');
            $table->string('lat');
            $table->string('lng');
            $table->string('location_details');
            $table->string('donation_time');
            $table->text('push_token')->nullable();
            $table->text('details')->nullable();
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
        Schema::dropIfExists('blood_request');
    }
}
