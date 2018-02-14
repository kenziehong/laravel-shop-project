<?php

namespace App\Http\Controllers;
use App\SanPham;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class SanPhamController extends Controller
{
    public function Moi()
    {
        $moi = SanPham::Moi();
        return view('pages.index', ['sp_moi' => $moi]);
    }
    public function ChiTietSP($ma_sp)
    {
        $chi_tiet_sp=SanPham::with('ThuongHieu')->findOrFail($ma_sp);
        return view('pages.chi_tiet',['chi_tiet'=>$chi_tiet_sp]);
    }
}