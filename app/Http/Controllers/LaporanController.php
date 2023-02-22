<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\Tagihan;
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
        $jumlahTotal = DB::table('tagihans')->sum('tagihan');
        // $jumlahTagihan =
        //     DB::table('tagihans')
        //     ->select(DB::raw('SUM(CAST(tagihan as UNSIGNED)) as total'))
        //     ->where('tagihan', '150000')
        //     ->orWhere('tagihan', '180000')
        //     ->orWhere('tagihan', '220000')
        //     ->sum('tagihan');
        return view('admin.menu.laporanBul', compact('order', 'totaltagihan', 'jumlahTotalPrice1', 'jumlahTotal', 'table_order', 'table_tagihan'));
    }
}
