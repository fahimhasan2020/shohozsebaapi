<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialPlatforms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_platforms', function (Blueprint $table) {
            $table->id();
            $table->string('facebook',200)->nullable();
            $table->string('instagram',200)->nullable();
            $table->string('messanger',200)->nullable();
            $table->string('whatsapp',200)->nullable();
            $table->string('email',200)->nullable();
            $table->string('phone_number',200)->nullable();
            $table->string('linkedin',200)->nullable();
            $table->string('twitter',200)->nullable();
            $table->string('youtube',200)->nullable();
            $table->string('imo',200)->nullable();
            $table->string('agora_token',200)->nullable();
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
        Schema::dropIfExists('social_platforms');
    }
}
