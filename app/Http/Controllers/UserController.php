<?php

namespace App\Http\Controllers;

use App\Models\order;
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
        $data = User::orderBy('id', 'desc')->latest()->paginate();
        return view('admin/menu/pengguna')->with('data', $data);
    }

    // function pengguna($id)
    // {
    //     // $data = User::all();
    //     $data = User::findUserById($id);
    //     return view('transaksi.order')->with('data', $data);
    // }
    //=================================================================================================

    // menampilkan data pengguna berlangganan ke menu pengguna=========================================
    public function order()
    {
        $orders = order::all();
        return view('admin/menu/LanggananPengguna', compact('orders'));
    }

    //menampilkan data transaksi data transaksi
    public function transaksi()
    {
        // $orders = order::orderBy('id', 'asc')->latest();
        $orders = order::orderBy('id', 'desc')->latest()->paginate();
        $datatransaksi = DB::table('orders')->get();

        return view('admin/menu/tagihan', compact('orders', 'datatransaksi'));
    }

    // fungsi cari tabel order
    public function liveSearch(Request $request)
    {
        $query = $request->input('query');

        $orders = order::all("%$query%");

        $output = '<ul class="list-group">';
        foreach ($orders as $order) {
            $output .= '<li class="list-group-item">' . $order->title . '</li>';
        }
        $output .= '</ul>';

        return $output;
    }

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
        return redirect('/')->with('success', 'berhasil logout');
    }

    //=========================================================================================================

    public function sidebar_pengguna()
    {

        // $data['$title'] = 'Login';
        // return view('user/login', $data);
        return view('admin.menu.LanggananPengguna', [
            'title' => 'Pengguna',
        ]);
    }
}
