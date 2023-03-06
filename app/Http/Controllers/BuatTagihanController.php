<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\Pengguna;
use App\Models\Tagihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuatTagihanController extends Controller
{
    //mengambil data pengguna dan ditampilkan pada halaman buat tagihan
    public function btagihan()
    {
        $pengguna = Pengguna::all();
        $databuattagihan = DB::table('penggunas')->get();
        return view('admin/menu/btagihan', compact('pengguna', 'databuattagihan'));
    }

    // menampilkan halaman lihat tagihan ketika buat tagihan telah dibuat dan melakukan pencarian dikolom pencarian
    public function ViewTagihan(Request $request)
    {
        // $tagihan = Tagihan::orderBy('id', 'desc')->latest()->paginate(1000);
        // $datatagihan = DB::table('tagihans')->get();
        // // dd($tagihan);
        // return view('admin.menu.LihatTagihan', compact('tagihan', 'datatagihan'));

        // 
        if ($request->cari) {
            $tagihan = Tagihan::where('nama', 'like', '%' . $request->cari . '%')
                ->orWhere('phone', 'like', '%' . $request->cari . '%')
                ->orWhere('paket', 'like', '%' . $request->cari . '%')
                ->orWhere('tagihan', 'like', '%' . $request->cari . '%')
                ->orWhere('status', 'like', '%' . $request->cari . '%')
                ->orWhere('tanggal', 'like', '%' . $request->cari . '%')
                ->get();
        } else {
            $tagihan = Tagihan::orderBy('id', 'desc')->latest()->paginate(1000);
        }
        $datatagihan = DB::table('tagihans')->get();

        // Menambahkan kondisi jika data tidak ditemukan
        if ($tagihan->isEmpty()) {
            $status = 'Tidak ada hasil yang ditemukan untuk "' . $request->cari . '"';
            $gambar = asset('pengguna/img/empty.jpg');
            return view('admin.menu.LihatTagihan', compact('tagihan', 'request', 'datatagihan', 'gambar', 'status'));
        }

        // fungsi filter status belum bayar dan lunas
        $filter = $request->filter ?? 'all'; // set filter default ke "all" jika tidak ada parameter filter

        if ($request->cari) {
            $tagihan = Tagihan::where('nama', 'like', '%' . $request->cari . '%')
                ->orWhere('phone', 'like', '%' . $request->cari . '%')
                ->orWhere('paket', 'like', '%' . $request->cari . '%')
                ->orWhere('tagihan', 'like', '%' . $request->cari . '%');
        } else {
            $tagihan = Tagihan::orderBy('id', 'desc');
        }

        if ($filter == 'belum_bayar') {
            $tagihan = $tagihan->where('status', 'Unpaid');
        } else if ($filter == 'lunas') {
            $tagihan = $tagihan->where('status', 'Paid');
        }

        $tagihan = $tagihan->paginate(1000);
        $datatagihan = DB::table('tagihans')->get();


        // Menambahkan kondisi jika data tidak ditemukan
        if ($tagihan->isEmpty()) {
            $gambar = asset('pengguna/img/empty.jpg');
            return view('admin.menu.LihatTagihan', compact('tagihan', 'datatagihan', 'request', 'filter', 'gambar'))->with('status', 'Data tidak ada');
        }

        return view('admin.menu.LihatTagihan', compact('tagihan', 'request', 'datatagihan', 'filter'));
    }


    // fungsi untuk melakukan buat tagihan dengan mengambil data dari pengguna dan dikirim ke halaman tagihan
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

    //fungsi untuk menual transaksi dengan menekan tombol ceklis pada halaman lihat tagihan
    public function Lunas($id)
    {
        $tagihan = Tagihan::find($id);
        // dd($tagihan);
        $tagihan->update(['status' => 'Paid']);
        return redirect()->back()->with('success', 'Tagihan Telah Lunas');
    }

    // fungsi untuk menghapus tagihan pada halaman tagihan
    public function destroy($id)
    {
        $tagihan = Tagihan::Find($id);
        $tagihan->delete();
        return redirect('/LihatTagihan');
    }
}
