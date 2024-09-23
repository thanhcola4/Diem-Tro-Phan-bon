<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveColumnsFromServicesTable extends Migration
{
    public function up()
    {
        Schema::table('services', function (Blueprint $table) {
            // Xóa ràng buộc khóa ngoại trước
            $table->dropForeign(['supplier_id']);
            // Sau đó mới xóa cột
            $table->dropColumn(['price', 'category', 'supplier_id']);
        });
    }

    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            // Khôi phục lại các cột nếu rollback
            $table->decimal('price', 8, 2)->nullable();
            $table->string('category')->nullable();
            $table->unsignedBigInteger('supplier_id')->nullable();

            // Khôi phục lại ràng buộc khóa ngoại
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
        });
    }
}