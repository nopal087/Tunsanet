<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\Pengguna;
use App\Models\Tagihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuatTagihanController extends Controller
{
    //mengambil data pengguna
    public function btagihan()
    {
        $pengguna = Pengguna::all();
        $databuattagihan = DB::table('penggunas')->get();
        return view('admin/menu/btagihan', compact('pengguna', 'databuattagihan'));
    }

    public function ViewTagihan()
    {
        $tagihan = Tagihan::orderBy('id', 'desc')->latest()->paginate(1000);
        $datatagihan = DB::table('tagihans')->get();
        // dd($tagihan);
        return view('admin.menu.LihatTagihan', compact('tagihan', 'datatagihan'));
    }


    // fungsi untuk melakukan buat tagihan dengan mengambil data dari pengguna
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

    public function destroy($id)
    {
        $tagihan = Tagihan::Find($id);
        $tagihan->delete();
        return redirect('/LihatTagihan');
    }
}
