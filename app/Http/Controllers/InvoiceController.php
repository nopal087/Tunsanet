<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function print($id)
    {
        $order = order::findOrFail($id);

        return view('transaksi.invoice_cetak', compact('order'));
    }
}
