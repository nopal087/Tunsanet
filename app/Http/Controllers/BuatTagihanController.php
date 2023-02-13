<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class BuatTagihanController extends Controller
{
    public function btagihan()
    {
        $pengguna = Pengguna::all();

        return view('admin/menu/btagihan', compact('pengguna'));
    }

    public function ViewTagihan()
    {

        return view('admin/menu/LihatTagihan');
    }
}
