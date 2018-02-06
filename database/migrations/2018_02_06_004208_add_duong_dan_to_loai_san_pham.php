<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDuongDanToLoaiSanPham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {    Schema::table('loai_san_pham', function($table) {
            $table->string('duong_dan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('loai_san_pham', function($table) {
            $table->dropColumn('duong_dan');
        });
    }
}
