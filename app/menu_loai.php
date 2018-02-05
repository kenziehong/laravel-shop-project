<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu_loai extends Model
{
    protected $table='menu_loai';

    public function loai_san_pham()
    {
        return $this->hasMany(loai_san_pham::class);
    }
}
