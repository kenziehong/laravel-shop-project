<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class SanPhamModel extends Model
{
    protected $table="san_pham";

    public static function Moi(){
      return DB::table('san_pham')->orderBy('ma_loai','desc')->limit(12)->get();
    }
}