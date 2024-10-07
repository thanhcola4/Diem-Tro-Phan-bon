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
    public function up()
    {
        Schema::create('site_statistics', function (Blueprint $table) {
            $table->id();
            $table->integer('views')->default(0); // Cột lưu trữ số lượt truy cập
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('site_statistics');
    }
};
