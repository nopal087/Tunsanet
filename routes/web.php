<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\Registercontroller;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/tamu', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('user/index', ['title' => 'index']);
})->name('index');

Route::get('/homedashboard', function () {
    return view('admin/home');
});

Route::get('/apengguna', function () {
    return view('admin/menu/pengguna');
});

Route::get('/tagihan', function () {
    return view('admin/menu/tagihan');
});
Route::get('/btagihan', function () {
    return view('admin/menu/btagihan');
});

Route::get('/dpendapatan', function () {
    return view('admin/menu/dpendapatan');
});

Route::get('/laporanBul', function () {
    return view('admin/menu/laporanBul');
});

Route::get('/login', function () {
    return view('user/login');
});

Route::get('/register', function () {
    return view('admin/menu/register');
});

// Pengguna
Route::get('/pengguna', function () {
    return view('user/index');
});

// Pengguna yang berlangganan
Route::get('/Lpengguna', function () {
    return view('admin/menu/LanggananPengguna');
});

Route::get('/countdown', function () {
    return view('admin/countdown');
});

// transaksi
// Route::get('/pesanan', function () {
//     return view('transaksi/pesan');
// });

//post transaksi
Route::post('pesanan', [TransaksiController::class, 'pesanan_action'])->name('pesanan.action');

// Register
Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
// login
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'authenticate']);

// logout
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/logout', [UserController::class, 'logout_action'])->name('logout.action');

// ubah pachange_password
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');


// mengambil data dari database user
Route::get('user', [UserController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//home
// Route::get('/', [Homecontroller::class, 'index']);

//mengambil paket internet didatabase
Route::get('/', [UserController::class, 'paket']);

// tess
Route::get('pesanan', [TransaksiController::class, 'pesanan'])->name('pesanan');

//mengirim data ke database transaksi
Route::post('pesanan', [TransaksiController::class, 'transaksi_action'])->name('transaksi.action');
