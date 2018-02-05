<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loai_san_pham extends Model
{
    protected $table='loai_san_pham';
    public function menu_loai()
    {
        return $this->belongsTo(menu_loai::class);
    }
    
}
