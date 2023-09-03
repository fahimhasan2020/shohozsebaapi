<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MedicineInvoice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicine_invoice', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->integer('user_id');
            $table->text('cart');
            $table->string('total');
            $table->integer('vat');
            $table->integer('full_total');
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
        Schema::dropIfExists('medicine_invoice');
    }
}