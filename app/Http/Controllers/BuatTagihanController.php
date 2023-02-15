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
        foreach ($request->id_pengguna as $key => $value) {
            Tagihan::create([
                'id_pengguna' => $value,
                'tanggal' => $request->tanggal,
                'nama' => $request->nama[$key],
                'phone' => $request->phone[$key],
                'paket' => $request->paket[$key],
                'tagihan' => $request->tagihan[$key],
                // 'status' => $request->status[$key],
            ]);
        }

        return redirect('/LihatTagihan');
    }

    //manual transaski dengan menekan tombol ceklis
    public function Lunas($id)
    {
        $tagihan = Tagihan::find($id);
        // dd($tagihan);
        $tagihan->update(['status' => 'Paid']);
        return redirect()->back()->with('success', 'Tagihan Telah Lunas');
    }
}
