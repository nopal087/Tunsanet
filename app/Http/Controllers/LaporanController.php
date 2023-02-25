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
        $datalaporan1 = DB::table('orders')->get();
        $table_order = order::orderBy('id', 'desc')->latest()->paginate();

        $totaltagihan = Tagihan::all()->count();
        $datalaporan2 = DB::table('orders')->get();
        $table_tagihan = Tagihan::orderBy('id', 'desc')->latest()->paginate();
        $jumlahtagihantotal = Tagihan::all()->sum('tagihan');
        return view('admin.menu.laporanBul', compact('order', 'datalaporan1', 'datalaporan2', 'totaltagihan', 'jumlahTotalPrice1', 'jumlahtagihantotal', 'table_order', 'table_tagihan'));
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
