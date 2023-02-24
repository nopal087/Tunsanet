<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\Tagihan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function laporan()
    {
        return view('admin.menu.laporanBul');
    }

    public function laporanBulanan()
    {
        $order = order::all()->count();
        $jumlahTotalPrice1 = DB::table('orders')->sum('total_price');
        $table_order = order::all();

        $totaltagihan = Tagihan::all()->count();
        $table_tagihan = Tagihan::all();
        $jumlahtagihantotal = Tagihan::all()->sum('tagihan');
        return view('admin.menu.laporanBul', compact('order', 'totaltagihan', 'jumlahTotalPrice1', 'jumlahtagihantotal', 'table_order', 'table_tagihan'));
    }

    public function dataAccordion()
    {
        $order = order::orderBy('id', 'desc')->latest()->paginate(5);;
        $date = Carbon::now();
        $data = [
            'tanggal_sekarang' => $date->format('d M Y')
        ];
        return view('admin.menu.Tambahpengguna', $data, compact('order'));
    }

    public function date()
    {

        $date = Carbon::now();
        $data = [
            'tanggal_sekarang' => $date->format('d F Y')
        ];
        return view('admin.header', $data);
    }
}
