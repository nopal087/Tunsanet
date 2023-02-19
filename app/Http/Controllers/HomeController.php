<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;
use App\Models\paketInternet;
use App\Models\Pengguna;
use App\Models\Tagihan;

class HomeController extends Controller
{
    //
    public function index()
    {
        // $paketInternets = paketInternet::all();
        return view('user.index', [
            'title' => 'Home',
        ]);
    }

    // public function jumPengguna()
    // {
    //     $Totaltagihan = Tagihan::all()->count();
    //     dd($Totaltagihan);
    //     return view('admin.home', compact('Totaltagihan'));
    // }
    public function  jumlah()
    {
        $Totaltagihan = tagihan::all()->count();
        $Totaltransaksi = order::all()->count();
        $Totalpengguna = Pengguna::all()->count();
        $Totaltransaksi = order::all()->count();

        return view('admin.home', compact('Totaltagihan', 'Totaltransaksi', 'Totalpengguna'));
    }

    // public function  jumTransaksi()
    // {
    //     $Totaltransaksi = order::all()->count();
    //     return view('admin.home', compact('Totaltransaksi'));
    // }
}
