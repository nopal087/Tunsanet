<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\Pengguna;
use App\Models\Tagihan;
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
        $tagihan = Tagihan::all();
        // dd($tagihan);

        return view('admin.menu.LihatTagihan', compact('tagihan'));
    }

    // public function create()
    // {
    //     return view('admin/menu/btagihan');
    // }

    public function BuatTagihan(Request $request)
    {
        // dd($request->all());
        Tagihan::create($request->all());


        return redirect('/LihatTagihan');
    }
}
