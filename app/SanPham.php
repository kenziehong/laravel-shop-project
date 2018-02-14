<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table="san_pham";

    public function ThuongHieu()
    {
      return $this->belongsTo(ThuongHieu::class);
    }

    public static function Moi(){
      return DB::table('san_pham')->orderBy('id','desc')->limit(12)->get();
    }

    public static function ChiTiet($ma_sp)
    {
       return DB::table('san_pham')->findOrFail($ma_sp);
    }
    
    public function loai_san_pham()
    {
       return $this->belongsTo(loai_san_pham::class);
    }
}
