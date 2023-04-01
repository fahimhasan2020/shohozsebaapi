<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNursing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nursing', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email")->nullable();
            $table->string("phone_number")->nullable();
            $table->string("trade_licence")->nullable();
            $table->string("details")->nullable();
            $table->string("lat")->nullable();
            $table->string("lng")->nullable();
            $table->string("total_rating")->nullable();
            $table->string("rating_star")->nullable();
            $table->string("profile_picture")->nullable();
            $table->integer("approved")->default(0);
            $table->integer("active")->default(1);
            $table->integer("suspended")->default(0);
            $table->timestamps();
        });

        Schema::create('nursing_gallery', function (Blueprint $table) {
            $table->id();
            $table->string("n_id");
            $table->string("photo")->nullable();
            $table->timestamps();
        });

        Schema::create('nursing_category', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("details")->nullable();
            $table->string("photo")->nullable();
            $table->timestamps();
        });

        Schema::create('nursing_services', function (Blueprint $table) {
            $table->id();
            $table->string("n_id");
            $table->string("service_name")->nullable();
            $table->string("service_cateogry_id")->nullable();
            $table->string("service_details")->nullable();
            $table->string("service_daily_price")->nullable();
            $table->string("service_weekly_price")->nullable();
            $table->string("service_monthly_price")->nullable();
            $table->string("active")->default(1);
            $table->timestamps();
        });

        Schema::create('nursing_order', function (Blueprint $table) {
            $table->id();
            $table->string("n_id");
            $table->string("u_id");
            $table->string("service_name")->nullable();
            $table->string("service_cateogry_id")->nullable();
            $table->string("service_details")->nullable();
            $table->string("service_price")->nullable();
            $table->string("service_from_date")->nullable();
            $table->string("service_to_date")->nullable();
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
        Schema::dropIfExists('nursing');
        Schema::dropIfExists('nursing_gallery');
        Schema::dropIfExists('nursing_category');
        Schema::dropIfExists('nursing_services');
        Schema::dropIfExists('nursing_order');
    }
}
