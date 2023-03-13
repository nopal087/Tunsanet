<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\Tagihan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    // menampilkan halaman laporan
    public function laporan()
    {
        return view('admin.menu.laporanBul');
    }

    // menampilkan data transaksi/order dengan jumlah total pendapatan dari transaksi
    public function laporanBulanan()
    {
        $order = order::all()->count();
        $jumlahTotalPrice1 = DB::table('orders')->sum('total_price');
        $datalaporan1 = DB::table('orders')->get();
        $table_order = order::orderBy('id', 'desc')->latest()->paginate();

        // menampilkan data tagihan ke halaman laporan dan jumlah pendapatan yang didapat dari tagihan user
        $totaltagihan = Tagihan::all()->count();
        $datalaporan2 = DB::table('orders')->get();
        $table_tagihan = Tagihan::orderBy('id', 'desc')->latest()->paginate();
        $jumlahtagihantotal = Tagihan::all()->sum('tagihan');
        return view('admin.menu.laporanBul', compact('order', 'datalaporan1', 'datalaporan2', 'totaltagihan', 'jumlahTotalPrice1', 'jumlahtagihantotal', 'table_order', 'table_tagihan'));
    }

    // menampilkan data transaksi terbaru pada halaman tambah pengguna. dan menampilkan tanggal sekarang 
    public function dataAccordion()
    {
        $order = order::orderBy('id', 'desc')->latest()->paginate(5);;
        $date = Carbon::now();
        $data = [
            'tanggal_sekarang' => $date->format('d M Y')
        ];
        return view('admin.menu.Tambahpengguna', $data, compact('order'));
    }
}
