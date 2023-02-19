<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function laporan()
    {
        return view('admin.menu.laporanBul');
    }
}
