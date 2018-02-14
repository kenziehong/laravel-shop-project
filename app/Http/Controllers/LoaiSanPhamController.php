<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loai_san_pham;

class LoaiSanPhamController extends Controller
{
    public function TheoID($loai_san_pham_id)
    {
        $sp_theo_id=loai_san_pham::with('SanPham')->findOrFail($loai_san_pham_id);
        return view('pages.loai_san_pham',['loai_sp'=>$sp_theo_id]);
    }
}
