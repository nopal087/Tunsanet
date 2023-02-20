<?php

use App\Http\Controllers\BuatTagihanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PenggunaController;
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

// Route::get('/homedashboard', function () {
//     return view('admin/home');
// });

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
// Route::get('/Lpengguna', function () {
//     return view('admin/menu/LanggananPengguna');
// });

Route::get('/create', function () {
    return view('admin/menu/Tambahpengguna');
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
// login User
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'authenticate']);

// Login admin
Route::get('/login_admin', [LoginAdminController::class, 'login_admin'])->name('login_admin');
Route::post('/login_admin', [LoginAdminController::class, 'authenticate']);

// register admin
Route::get('register_admin', [LoginAdminController::class, 'register_admin'])->name('register_admin');
Route::post('register_admin', [LoginAdminController::class, 'registeradmin_action'])->name('registeradmin.action');
// Route::get('/homedashboard', [LoginAdminController::class, 'home']);

//logout admin
Route::get('/logout_admin', [LoginAdminController::class, 'logout_admin'])->name('logout_admin');
Route::post('/logout_admin', [LoginAdminController::class, 'logout_action'])->name('logout.action');

// logout user
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/logout', [UserController::class, 'logout_action'])->name('logout.action');

// ubah pachange_password
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');


// mengambil data dari database user
Route::get('user', [UserController::class, 'index']);
// Route::get('user', [UserController::class, 'pengguna']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//mengambil data dari databse orders
// Route::get('/Lpengguna', [UserController::class, 'order']);

//transaksi / tagihan
Route::get('/tagihan', [UserController::class, 'transaksi']);

Route::get('/btagihan', [BuatTagihanController::class, 'btagihan']);
//lihat tagihan

//home
// Route::get('/', [Homecontroller::class, 'index']);

//mengambil paket internet didatabase
Route::get('/', [UserController::class, 'paket']);

// transaksi
Route::get('pesanan', [TransaksiController::class, 'pesanan'])->name('pesanan');

//mengirim data ke database transaksi
Route::post('pesanan', [TransaksiController::class, 'transaksi_action'])->name('transaksi.action');



//orders
Route::get('/order', [OrderController::class, 'summary'])->name('summary');
Route::post('/checkout', [OrderController::class, 'checkout']);
Route::delete('/admin/menu/tagihan/{id}', [OrderController::class, 'destroy']);
//midtrans-callback

//detail order
Route::get('/detail_order', function () {
    return view('transaksi.detail_order');
});

Route::get('transaksi.detail_order', [OrderController::class, 'detail_order'])->name('detail_order');

//invoice
Route::get('/invoice', function () {
    return view('transaksi.invoice');
});
Route::get('/finish', function () {
    return view('transaksi.finish');
});

Route::get('transaksi.invoice/{id}', [OrderController::class, 'invoice'])->name('invoice');
// Route::get('transaksi.finish}', [OrderController::class, 'finish']);

//pengguna langganan
Route::get('/Lpengguna', [PenggunaController::class, 'index']);
Route::get('/admin/menu/Tambahpengguna', [PenggunaController::class, 'create']);
Route::post('/admin/menu/store', [PenggunaController::class, 'store']);
Route::get('/admin/menu/{id}/edit', [PenggunaController::class, 'edit']);
Route::put('/admin/menu/{id}', [PenggunaController::class, 'update']);
Route::delete('/admin/menu/pengguna/{id}', [PenggunaController::class, 'destroy']);

// Carii 

//buat tagihan
// Route::get('/LihatTagihan', [PenggunaController::class, 'LihatTagihan']);
Route::get('/LihatTagihan', [BuatTagihanController::class, 'ViewTagihan']);
Route::post('/admin/menu/btagihan', [BuatTagihanController::class, 'BuatTagihan']);
Route::get('/admin/menu/Lunas/{id}', [BuatTagihanController::class, 'Lunas']);
Route::delete('/admin/menu/LihatTagihan/{id}', [BuatTagihanController::class, 'destroy']);

//TRANSAKSI MANUAL
Route::get('/admin/manual/lunas/{id}', [OrderController::class, 'manual']);

// MENAMPILKAN DATA DI HOME
Route::get('homedashboard2023', [HomeController::class, 'jumlah']);
// Route::get('homedashboard', [HomeController::class, 'jumTransaksi']);

// Menampilkan data di Laporan Bulanan
Route::get('/laporanBul', [OrderController::class, 'laporanBulanan']);
// Route::get('/laporan', [LaporanController::class, 'laporan']);


// Cetak Invoice
Route::get('/invoice.cetak/{id}', [InvoiceController::class, 'print'])->name('invoice.cetak');
