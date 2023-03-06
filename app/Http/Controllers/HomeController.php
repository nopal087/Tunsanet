<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;
use App\Models\paketInternet;
use App\Models\Pengguna;
use App\Models\Tagihan;
use Carbon\Carbon;

class HomeController extends Controller
{
    // menampilkan halaman home atau index pada halama user
    public function index()
    {
        return view('user.index', [
            'title' => 'Home',
        ]);
    }

    // menampilkan jumlah totaltagihan, total transaksi, total pengguna, pada halaman beranda dashboard admin
    // public function  jumlah()
    // {
    //     $Totaltagihan = tagihan::all()->count();
    //     $Totaltransaksi = order::all()->count();
    //     $Totalpengguna = Pengguna::all()->count();
    //     $Totaltransaksi = order::all()->count();

    //     return view('admin.home', compact('Totaltagihan', 'Totaltransaksi', 'Totalpengguna'));
    // }
}
