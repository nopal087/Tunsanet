<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\paketInternet;
use App\Models\Transaksi;

class UserController extends Controller
{
    //menampilkan data ke table pengguna===============================================================
    function index()
    {
        // $data = User::all();
        $data = User::orderBy('id', 'asc')->latest()->paginate(7);
        return view('admin/menu/pengguna')->with('data', $data);
    }
    //=================================================================================================

    //fungsi manggil data paket internet dari database==================================================
    public function paket()
    {
        $paketInternets = paketInternet::all();
        return view('user.index', compact('paketInternets'));
        // return $paketInternets;
    }
    //===================================================================================================
    //fungi login======================================================================================
    public function login()
    {

        // $data['$title'] = 'Login';
        // return view('user/login', $data);
        return view('user.login', [
            'title' => 'Login',
        ]);
    }

    public function authenticate(Request $request)
    {
        // dd($request->all);
        // dd($paketInternets);

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);



        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }
        return back()->with('loginError', 'Login failed');

        // $paketInternets = paketInternet::all();
        // return view('user.index', compact('paketInternets'));
    }
    //=================================================================================================

    //fungsi register==================================================================================
    public function register()
    {
        $data['$title'] = 'Register';
        return view('user/register', $data);
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);
        $user = new User([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'password' => Hash::make($request->password),

        ]);
        $user->save();
        return redirect()->route('login')->with('success', 'Registration Success. Please Login!');
    }
    //===========================================================================================================

    //fungsi logout=========================================================================================
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/tamu')->with('success', 'berhasil logout');
    }

    //=========================================================================================================

    // public function pesanan(Request $request)
    // {
    //     $id = $request->id;
    //     $data['$title'] =
    //         'pesanan';
    //     $data['$id'] = $id;
    //     $paketInternets = paketInternet::all();
    //     $biaya_pemasangan = 300000;
    //     $user = User::find(auth()->user()->id);
    //     return view('transaksi.pesan', compact('id',  'paketInternets', 'biaya_pemasangan', 'user'));
    // }



    // //post pesanan / transaksi
    // public function transaksi_action(Request $request)
    // {
    //     $transaksi = new Transaksi([
    //         'id_user' => auth()->user()->id,
    //         'id_paket' => $request->id,
    //         'tanggal_pembelian' => date_create('now')->format('Y-m-d H:i:s'),
    //         'metode_pembayaran' => "gopay",
    //         'status' => "belum bayar",

    //     ]);
    //     $transaksi->save();
    //     return view('welcome');
    // }

    // //mencari user dengan id di ringkasan
    // public function findUserById($id)
    // {
    //     $user = Transaksi::find($id);
    //     return view('transaksi.pesan', compact('user'));
    // }
}
