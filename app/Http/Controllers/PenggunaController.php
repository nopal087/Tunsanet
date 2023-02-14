<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        $pengguna = Pengguna::all();
        // dd($pengguna);
        return view('admin/menu/LanggananPengguna', compact('pengguna'));
    }

    //tambah
    public function create()
    {
        return view('admin/menu/Tambahpengguna');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Pengguna::create($request->except(['_token']));
        return redirect('/Lpengguna');
    }

    //edit
    public function edit($id)
    {
        $pengguna = Pengguna::Find($id);
        return view('admin/menu/editPengguna', compact(['pengguna']));
    }

    public function update($id, Request $request)
    {
        $pengguna = Pengguna::Find($id);
        $pengguna->update($request->except(['_token']));
        return redirect('/Lpengguna');
    }

    public function destroy($id)
    {
        $pengguna = Pengguna::Find($id);
        $pengguna->delete();
        return redirect('/Lpengguna');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $pengguna = Pengguna::where('nama', 'like', "%" . $keyword . "%")->paginate(5);
        return view('admin/menu/LanggananPengguna', compact('pengguna'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
