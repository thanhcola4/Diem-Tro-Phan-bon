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
    Schema::table('services', function (Blueprint $table) {
        $table->integer('views')->default(0); // Thêm cột views, mặc định là 0
    });
}

public function down()
{
    Schema::table('services', function (Blueprint $table) {
        $table->dropColumn('views'); // Xóa cột views khi rollback
    });
}
};
