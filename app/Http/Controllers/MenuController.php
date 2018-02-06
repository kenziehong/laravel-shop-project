<?php

namespace App\Http\Controllers;
use App\menu_loai;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function HienThi()
    {
       $ds_menu = menu_loai::with('loai_san_pham')->get();
        return view('main');
    }
}