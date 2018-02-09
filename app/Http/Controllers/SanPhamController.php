<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\SanPhamModel;
use App\Http\Controllers\Controller;

class SanPhamController extends Controller
{
    public function Moi()
    {
        $moi = SanPhamModel::Moi();
        return view('pages.index', ['sp_moi' => $moi]);
    }
    public function ChiTietSP($ma_sp)
    {
        $chi_tiet_sp = SanPhamModel::ChiTiet($ma_sp);
        return view('pages.chi_tiet',['chi_tiet'=>$chi_tiet_sp]);
    }
}