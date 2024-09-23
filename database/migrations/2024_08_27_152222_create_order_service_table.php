<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   // database/migrations/xxxx_xx_xx_create_order_service_table.php
public function up()
{
    Schema::create('order_service', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('order_id');
        $table->unsignedBigInteger('service_id');
        $table->integer('quantity');
        $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
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
        Schema::dropIfExists('order_service');
    }
};
