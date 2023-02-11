<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\paketInternet;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    public function pesanan(Request $request)
    {
        $id = $request->id;
        $data['$title'] =
            'pesanan';
        $data['$id'] = $id;
        $paketInternets = paketInternet::all();
        $biaya_pemasangan = 300000;
        $user = User::find(auth()->user()->id);
        return view('transaksi.pesan', compact('id',  'paketInternets', 'biaya_pemasangan', 'user'));
    }



    //post pesanan / transaksi
    public function transaksi_action(Request $request)
    {
        $transaksi = new Transaksi([
            'id_user' => auth()->user()->id,
            'id_paket' => $request->id,
            'tanggal_pembelian' => date_create('now')->format('Y-m-d H:i:s'),
            'metode_pembayaran' => "Shopee pay",
            'status' => "Sudah Bayar",

        ]);
        $transaksi->save();
        return view('#');
    }

    //mencari user dengan id di ringkasan
    public function findUserById($id)
    {
        $user = Transaksi::find($id);
        return view('transaksi.pesan', compact('user'));
    }
}
