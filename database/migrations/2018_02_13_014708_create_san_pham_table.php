<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanPhamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('san_pham', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loai_san_pham_id');
            $table->string('ten_san_pham');
            $table->string('thuong_hieu_id');
            $table->string('noi_dung_chi_tiet',15000)->collation = 'utf8_unicode_ci';
            $table->double('don_gia');
            $table->double('don_gia_khuyen_mai');
            $table->string('hinh');
            $table->string('dvt');
            $table->rememberToken();
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
         Schema::dropIfExists('san_pham');
    }
}
