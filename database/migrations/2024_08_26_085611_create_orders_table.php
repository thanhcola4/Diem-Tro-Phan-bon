<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(); // ID người dùng (nếu có)
            $table->decimal('total', 15, 2); // Tổng giá trị đơn hàng
            $table->string('status')->default('pending'); // Trạng thái đơn hàng
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * 
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
