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
}