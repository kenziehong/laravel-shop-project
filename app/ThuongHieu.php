<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThuongHieu extends Model
{
    protected $table='thuong_hieu';
    public function SanPham()
    {
        return $this->hasMany(SanPham::class);
    }
}
