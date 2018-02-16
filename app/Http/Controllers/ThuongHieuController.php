<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ThuongHieu;

class ThuongHieuController extends Controller
{
    public function SanPhamCungThuongHieu($ma_thuong_hieu)
    {
        $ds_sp = ThuongHieu::with('SanPham')->findOrFail($ma_thuong_hieu);
         return view('pages.san_pham_cung_thuong_hieu',['thuong_hieu'=>$ds_sp]);
    }
}
