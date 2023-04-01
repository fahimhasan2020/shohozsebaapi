<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactSupport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_support', function (Blueprint $table) {
            $table->id();
            $table->string("provider_type");
            $table->string("provider_id");
            $table->string("provider_email");
            $table->string("provider_phone");
            $table->string("provider_subject");
            $table->string("provider_details",200);
            $table->integer("issue_active")->default(1);
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
        Schema::dropIfExists('contact_support');
    }
}
