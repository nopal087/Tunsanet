<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    // fungsi untuk melakukan cetak invoice
    public function print($id)
    {
        $order = order::findOrFail($id);
        return view('transaksi.invoice_cetak', compact('order'));
    }
}
