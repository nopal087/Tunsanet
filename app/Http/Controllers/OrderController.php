<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;
use App\Models\paketInternet;
use App\Models\User;

class OrderController extends Controller
{
    public function order()
    {
        return view('transaksi.order');
    }




    //ringkasan order
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

    //checkout orderan/pesanan
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

    //midtrans callback
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

    public function invoice($id)
    {
        $order = Order::find($id);
        return view('transaksi.invoice', compact('order'));
    }

    // public function finish()
    // {
    //     return view('transaksi.finish');
    // }


    // Manual Transaksi
    public function manual($id)
    {
        $order = order::find($id);
        // dd($tagihan);
        $order->update(['status' => 'Paid']);
        return redirect()->back()->with('success', 'Tagihan Telah Lunas');
    }

    public function destroy($id)
    {
        $order = order::Find($id);
        $order->delete();
        return redirect('/tagihan');
    }

    public function laporanBulanan()
    {
        $order = order::all()->count();
        return view('admin.menu.laporanBul', compact('order'));
    }
}
