<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;
use App\Models\paketInternet;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    // menampilkan halaman laporan dengan mengambil data dari transaki/ order
    public function laporan()
    {
        return view('transaksi.order');
    }

    // menampilkan halamamnm ringkasan order dengan mengambil data dari paket internet dan biaya pemasangan sesuai dengan paket yang dipilih oleh user
    public function summary(Request $request)
    {
        $id = $request->id;
        $data['$title'] =
            'pesanan';
        $data['$id'] = $id;
        $paketInternets = paketInternet::all();
        $biaya_pemasangan = 300000;
        $user = User::find(auth()->user()->id);
        return view('transaksi.order', compact('id',  'paketInternets', 'biaya_pemasangan', 'user'));
    }

    //fungsi checkout orderan/pesanan dengan mengirim transaksi detail, order id, dan gross amount untuk ditampilkan pada halaman pembayaran.
    public function checkout(Request $request)
    {
        // return $request->all();;
        $request->request->add(['status' => 'Unpaid', 'payment_id' => uniqid()]); //add request
        // dd($request->all());
        $order = order::create($request->all());

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $order->payment_id,
                'gross_amount' => $order->total_price,
            ),
            'customer_details' => array(
                'first_name' => $request->nama,
                'last_name' => ' ',
                'phone' => $request->phone,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('transaksi.detail_order', compact('snapToken', 'order'));
    }

    // fungsi midtrans callback untuk melakukan reques apakah pesanan yang telah dipesan sudah berhasil atau tidak dengan menampilkan status pesanan lunas atau belum lunas.
    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);
        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == 'settlement' or $request->transaction_status == 'capture') {
                $order = Order::where('payment_id',  $request->order_id)->first();
                $order->update(['status' => 'Paid']);
            }
        }
    }

    // menampilkan invoice pesanan sesuai dengan id order dan ditampilkan pada halaman invoice.
    public function invoice($id)
    {
        $order = Order::find($id);
        return view('transaksi.invoice', compact('order'));
    }


    //fungsi Manual Transaksi untuk merubah status belum bayar menjadi sudah bayar 
    public function manual($id)
    {
        $order = order::find($id);
        $order->update(['status' => 'Paid']);
        return redirect()->back()->with('success', 'Tagihan Telah Lunas');
    }

    // fungsi untuk menghapus transaksi atau order pada halaman data transaksi.
    public function destroy($id)
    {
        $order = order::Find($id);
        $order->delete();
        return redirect('/tagihan');
    }
}
