<?php

use App\Http\Controllers\AdminController;
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
// Route::get('/homedashboard', function () {
//     return view('admin/home');
// });

Route::get('/tamu', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('user/index', ['title' => 'index']);
})->name('index');


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

Route::get('/detail_order', function () {
    return view('transaksi.detail_order');
});
//invoice
Route::get('/invoice', function () {
    return view('transaksi.invoice');
});
Route::get('/finish', function () {
    return view('transaksi.finish');
});
// });

Route::get('/create', function () {
    return view('admin/menu/Tambahpengguna');
});
Route::get('/FAQ', function () {
    return view('user.FAQ');
});


// Register
Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
// login User
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'authenticate']);
// logout user
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/logout', [UserController::class, 'logout_action'])->name('logout.action');
// ubah pachange_password
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
// mengambil data dari database user
Route::get('user', [UserController::class, 'index']);
//menampilkan data ke tabel data transaksi
Route::get('/tagihan', [UserController::class, 'transaksi']);
//mengambil paket internet didatabase
Route::get('/', [UserController::class, 'paket']);

// Login admin
Route::get('/login_admin', [AdminController::class, 'login_admin'])->name('login_admin');
Route::post('/login_admin', [AdminController::class, 'authenticate']);

// register admin
Route::get('admin_register', [AdminController::class, 'admin_register'])->name('admin_register');
Route::post('admin_register', [AdminController::class, 'admin_register_action'])->name('admin_register.action');
Route::get('/homedashboard', [AdminController::class, 'home']);

//transaksi / tagihan
Route::get('/btagihan', [BuatTagihanController::class, 'btagihan']);


//orders
Route::get('/order', [OrderController::class, 'summary'])->name('summary');
Route::post('/checkout', [OrderController::class, 'checkout']);
Route::delete('/admin/menu/tagihan/{id}', [OrderController::class, 'destroy']);
Route::get('transaksi.detail_order', [OrderController::class, 'detail_order'])->name('detail_order');
Route::get('transaksi.invoice/{id}', [OrderController::class, 'invoice'])->name('invoice');
//TRANSAKSI MANUAL
Route::get('/admin/manual/lunas/{id}', [OrderController::class, 'manual']);

//pengguna langganan
Route::get('/Lpengguna', [PenggunaController::class, 'index']);
Route::get('/admin/menu/Tambahpengguna', [PenggunaController::class, 'create']);
Route::post('/admin/menu/store', [PenggunaController::class, 'store']);
Route::get('/admin/menu/pengguna/{id}/edit', [PenggunaController::class, 'edit']);
Route::put('/admin/menu/{id}', [PenggunaController::class, 'update']);
Route::delete('/admin/menu/pengguna/{id}', [PenggunaController::class, 'destroy']);

//buat tagihan
// Route::get('/LihatTagihan', [PenggunaController::class, 'LihatTagihan']);
Route::get('/LihatTagihan', [BuatTagihanController::class, 'ViewTagihan']);
Route::post('/admin/menu/btagihan', [BuatTagihanController::class, 'BuatTagihan']);
Route::get('/admin/menu/Lunas/{id}', [BuatTagihanController::class, 'Lunas']);
Route::delete('/admin/menu/LihatTagihan/{id}', [BuatTagihanController::class, 'destroy']);

// Route::get('user', [UserController::class, 'pengguna']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// MENAMPILKAN DATA DI HOME
Route::get('homedashboard', [HomeController::class, 'jumlah']);

// Menampilkan data di Laporan Bulanan
Route::get('/laporanBul', [LaporanController::class, 'laporanBulanan']);
Route::get('/admin/menu/Tambahpengguna', [LaporanController::class, 'dataAccordion']);
Route::get('/admin/header', [LaporanController::class, 'date']);

// Cetak Invoice
Route::get('/invoice.cetak/{id}', [InvoiceController::class, 'print'])->name('invoice.cetak');
