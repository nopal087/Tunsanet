<?php

namespace App\Http\Controllers;

use App\Models\Agen;
use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\paketInternet;
use App\Models\Pengguna;
use App\Models\Tagihan;
use App\Models\Transaksi;

class UserController extends Controller
{
    //menampilkan data user yang registrasi ke table pengguna
    function index(Request $request)
    {
        // $data = User::orderBy('id', 'desc')->latest()->paginate();
        // return view('admin/menu/pengguna')->with('data', $data);

        if ($request->cari) {
            $user = User::where('name', 'like', '%' . $request->cari . '%')
                ->orWhere('username', 'like', '%' . $request->cari . '%')
                ->orWhere('email', 'like', '%' . $request->cari . '%')
                ->orWhere('no_hp', 'like', '%' . $request->cari . '%')
                ->orWhere('alamat', 'like', '%' . $request->cari . '%')
                ->orWhere('is_admin', 'like', '%' . $request->cari . '%')
                ->get();

            // menampilkan data pengguna 
        } else {
            $user = User::orderBy('id', 'desc')->latest()->paginate();
        }
        // $datauser = DB::table('users')->get();

        // Menambahkan kondisi jika data tidak ditemukan
        if ($user->isEmpty()) {
            $status = 'Tidak ada hasil yang ditemukan untuk "' . $request->cari . '"';
            $gambar = asset('pengguna/img/empty.jpg');
            return view('admin/menu/pengguna', compact('user', 'request', 'gambar', 'status'));
        }
        return view('admin/menu/pengguna', compact('user', 'request'));
    }

    // menampilkan data pengguna berlangganan ke menu pengguna
    public function order()
    {
        $orders = order::all();
        return view('admin/menu/LanggananPengguna', compact('orders'));
    }

    //menampilkan data transaksi data transaksi
    // public function transaksi()
    // {
    //     // $orders = order::orderBy('id', 'asc')->latest();
    //     $orders = order::orderBy('id', 'desc')->latest()->paginate();
    //     $datatransaksi = DB::table('orders')->get();

    //     return view('admin/menu/tagihan', compact('orders', 'datatransaksi'));
    // }

    //menampilkan data transaksi dan melakukan fungsi pencarian 
    public function transaksi(Request $request)
    {
        if ($request->cari) {
            $orders = order::where('nama', 'like', '%' . $request->cari . '%')
                ->orWhere('alamat', 'like', '%' . $request->cari . '%')
                ->orWhere('phone', 'like', '%' . $request->cari . '%')
                ->orWhere('paket', 'like', '%' . $request->cari . '%')
                ->orWhere('total_price', 'like', '%' . $request->cari . '%')
                ->orWhere('status', 'like', '%' . $request->cari . '%')
                ->latest()->paginate();
        } else {
            $orders = order::orderBy('id', 'desc')->latest()->paginate();
        }
        $datatransaksi = DB::table('orders')->get();

        // Menambahkan kondisi jika data tidak ditemukan
        if ($orders->isEmpty()) {
            $status = 'Tidak ada hasil yang ditemukan untuk "' . $request->cari . '"';
            $gambar = asset('pengguna/img/empty.jpg');
            return view('admin/menu/tagihan', compact('orders', 'request', 'datatransaksi', 'gambar', 'status'));
        }


        // fungsi untuk memnfilter status apakah sudah  bayar atau belum
        $filter = $request->filter ?? 'all'; // set filter default ke "all" jika tidak ada parameter filter

        if ($request->cari) {
            $orders = Order::where('nama', 'like', '%' . $request->cari . '%')
                ->orWhere('phone', 'like', '%' . $request->cari . '%')
                ->orWhere('alamat', 'like', '%' . $request->cari . '%')
                ->orWhere('paket', 'like', '%' . $request->cari . '%');
        } else {
            $orders = Order::orderBy('id', 'desc');
        }

        if ($filter == 'belum_bayar') {
            $orders = $orders->where('status', 'Unpaid');
        } else if ($filter == 'lunas') {
            $orders = $orders->where('status', 'Paid');
        }

        $orders = $orders->paginate(1000);
        $datatransaksi = DB::table('orders')->get();
        $order = order::where('status', 'Paid')->count();
        $order1 = order::where('status', 'Unpaid')->count();
        // $jumlahTotalPrice1 = DB::table('orders')->sum('total_price');
        $jumlahTotalPrice1 = order::where('status', '=', 'Paid')->sum('total_price');

        return view('admin.menu.tagihan', compact('orders', 'order', 'order1', 'jumlahTotalPrice1', 'request', 'datatransaksi', 'filter'));
    }


    //fungsi untuk manggil data paket internet dari database paketinternets
    public function paket()
    {
        $paketInternets = paketInternet::all();
        return view('user.index', compact('paketInternets'));
    }

    //fungi untuk menampilkan halaman login user 
    public function login()
    {
        // $data['$title'] = 'Login';
        // return view('user/login', $data);
        return view('user.login', [
            'title' => 'Login',
        ]);
    }

    // untuk menangani jika login admin
    public function dashboard()
    {
        $is_admin = auth()->user()->is_admin;
        if (!$is_admin) {
            // jika user bukan admin, redirect ke halaman lain atau tampilkan pesan error
            return redirect('/')->back()->with('error', 'Anda tidak memiliki akses ke halaman ini!');
        }
        // jika user adalah admin, tampilkan halaman dashboard
        return view('homedashboard');
    }

    // fungsi untuk mengautentikasi login user dengan mengecek apakah email dan password sama dengan yang ada pada database jika benar maka akan diarahkan masuk kehalaman utama atau index
    // public function authenticate(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email' => ['required', 'email'],
    //         'password' => ['required'],
    //     ]);
    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();

    //         return redirect()->intended('/');
    //     }
    //     return back()->with('loginError', 'Login failed');
    // }


    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->isAdmin()) {
                return redirect()->intended('/homedashboard');
            }
            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Login gagal');
    }

    //fungsi untuk menampilkan halaman register user
    public function register()
    {
        $data['$title'] = 'Register';
        return view('user/register', $data);
    }

    // fungsi untuk register user dengan mengisi data yang dibutuhkan dan dikirim ke dalam database users dan kemudian disimpan dan diarahkan kehalaman login.
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
            'is_admin' => false,

        ]);
        $user->save();
        return redirect()->route('login')->with('success', 'Registration Success. Please Login!');
    }

    //fungsi untuk halaman logout user, dan diarahkan kehalaman index.
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'berhasil logout');
    }

    //fungsi untuk halaman logout admin, dan diarahkan kehalaman login.
    public function logout_admin()
    {
        Auth::guard('admin')->logout();

        return redirect('/login')->with('success', 'Anda telah berhasil keluar.');
    }

    // menampilkan halaman admin sidebar pengguna yang berlangganan atau nama dari tabelnya 'Pengguna berlangganan'
    public function sidebar_pengguna()
    {
        return view('admin.menu.LanggananPengguna', [
            'title' => 'Pengguna',
        ]);
    }


    public function  jumlah()
    {

        $Totaltagihan = Tagihan::all()->count();
        $Totaltransaksi = order::all()->count();
        $Totalpengguna = Pengguna::all()->count();
        $Totaltransaksi = order::all()->count();
        $TotalAgen = Agen::all()->count();

        return view('admin.home', compact('Totaltagihan', 'Totaltransaksi', 'Totalpengguna', 'TotalAgen'));
    }
}
