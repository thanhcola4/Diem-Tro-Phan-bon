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
        Schema::table('order_items', function (Blueprint $table) {
            $table->dropForeign(['order_id']);  // Xóa ràng buộc khóa ngoại nếu có
        });
    
        Schema::table('order_service', function (Blueprint $table) {
            $table->dropForeign(['order_id']);  // Xóa ràng buộc khóa ngoại nếu có
        });
        Schema::dropIfExists('categories');
        Schema::dropIfExists('contract');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('order_items');
        Schema::dropIfExists('order_service');
        Schema::dropIfExists('suppliers');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
