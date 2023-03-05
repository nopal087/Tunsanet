<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenggunaController extends Controller
{
    // menampilkan halaman pengguna dan memberikan fungsi untuk melakukan pencarian 
    public function index(Request $request)
    {
        if ($request->cari) {
            $pengguna = Pengguna::where('nama', 'like', '%' . $request->cari . '%')
                ->orWhere('phone', 'like', '%' . $request->cari . '%')
                ->orWhere('alamat', 'like', '%' . $request->cari . '%')
                ->orWhere('paket', 'like', '%' . $request->cari . '%')
                ->get();

            // menampilkan data pengguna 
        } else {
            $pengguna = Pengguna::orderBy('id', 'desc')->latest()->paginate();
        }
        $datapengguna = DB::table('penggunas')->get();

        // Menambahkan kondisi jika data tidak ditemukan
        if ($pengguna->isEmpty()) {
            $status = 'Tidak ada hasil yang ditemukan untuk "' . $request->cari . '"';
            $gambar = asset('pengguna/img/empty.jpg');
            return view('admin/menu/LanggananPengguna', compact('pengguna', 'request', 'datapengguna', 'gambar', 'status'));
        }
        return view('admin/menu/LanggananPengguna', compact('pengguna', 'request', 'datapengguna'));
    }


    //menampilkan halamantambah pengguna
    public function create()
    {
        return view('admin/menu/Tambahpengguna');
    }

    // menampikan halaman ketika pengguna sudah ditambahkan
    public function store(Request $request)
    {
        // dd($request->all());
        Pengguna::create($request->except(['_token']));
        return redirect('/Lpengguna');
    }

    //menampilkan halaman edit pengguna dengan mengambil id dari pengguna yang sudah ada
    public function edit($id)
    {
        $pengguna = Pengguna::Find($id);
        return view('admin/menu/editPengguna', compact(['pengguna']));
    }

    // mengarahkan kembali kehalaman pengguna ketika pengeditan telah disimpan
    public function update($id, Request $request)
    {
        $pengguna = Pengguna::Find($id);
        $pengguna->update($request->except(['_token']));
        return redirect('/Lpengguna');
    }

    // fungsi menghapus pengguna dengan mencari Id pengguna
    public function destroy($id)
    {
        $pengguna = Pengguna::Find($id);
        $pengguna->delete();
        return redirect('/Lpengguna');
    }
}
