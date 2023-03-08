<?php

namespace App\Http\Controllers;

use App\Models\Agen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgenController extends Controller
{
    public function index_agen()
    {
        $agen = Agen::orderBy('id', 'desc')->latest()->paginate();
        $dataagen = DB::table('agens')->get();
        return view('admin.menu.DataAgen', compact('dataagen', 'agen'));
    }

    public function create()
    {
        return view('admin/menu/TambahAgen');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Agen::create($request->except(['_token']));
        return redirect('/Agen');
    }
    public function ajukan(Request $request)
    {
        // dd($request->all());
        session()->flash('success', 'Ajuan berhasil dikirim, silahkan konfirmasi ke admin agar proses persetujuan diproses');
        Agen::create($request->except(['_token']));
        return redirect('/agen');
    }

    public function edit($id)
    {
        $agen = Agen::Find($id);
        return view('admin.menu.editAgen', compact(['agen']));
    }

    // mengarahkan kembali kehalaman pengguna ketika pengeditan telah disimpan
    public function update($id, Request $request)
    {
        $agen = Agen::Find($id);
        $agen->update($request->except(['_token']));
        return redirect('/Agen');
    }

    public function destroy($id)
    {
        $agen = Agen::Find($id);
        $agen->delete();
        return redirect('/Agen');
    }

    //fungsi Manual Transaksi untuk merubah status belum bayar menjadi sudah bayar 
    public function manual($id)
    {
        $agen = Agen::find($id);
        $agen->update(['status' => 'Aktif']);
        return redirect()->back()->with('success', 'Status Aktif');
    }

    public function cari(Request $request)
    {
        // fungsi filter status aktif tidak aktif
        $filter = $request->filter ?? 'all'; // set filter default ke "all" jika tidak ada parameter filter

        if ($request->cari) {
            $agen = Agen::where('nama', 'like', '%' . $request->cari . '%')
                ->orWhere('phone', 'like', '%' . $request->cari . '%')
                ->orWhere('paket', 'like', '%' . $request->cari . '%')
                ->orWhere('status', 'like', '%' . $request->cari . '%');
        } else {
            $agen = Agen::orderBy('id', 'desc');
        }

        if ($filter == 'Tidak Aktif') {
            $agen = $agen->where('status', 'Tidak Aktif');
        } else if ($filter == 'Aktif') {
            $agen = $agen->where('status', 'Aktif');
        }

        $agen = $agen->paginate(1000);
        $DataAgen = DB::table('agens')->get();


        // Menambahkan kondisi jika data tidak ditemukan
        if ($agen->isEmpty()) {
            $gambar = asset('pengguna/img/empty.jpg');
            return view('admin.menu.DataAgen', compact('agen', 'DataAgen', 'request', 'filter', 'gambar'))->with('status', 'Data tidak ada');
        }

        return view('admin.menu.DataAgen', compact('agen', 'request', 'DataAgen', 'filter'));
    }
}
