<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class SanPham extends Model
{
    protected $table="san_pham";

    public function ThuongHieu()
    {
      return $this->belongsTo(ThuongHieu::class);
    }

    public static function Moi(){
      return DB::table('san_pham')->orderBy('loai_san_pham_id','desc')->limit(12)->get();
    }

    public static function ChiTiet($ma_sp)
    {
       return DB::table('san_pham')->findOrFail($ma_sp);
    }
}
