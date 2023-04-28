<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgenController;
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
use Illuminate\Auth\Events\Logout;

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

// fungsi untuk menampilkan halaman utama user
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
Route::get('/agen', function () {
    return view('user.agen');
});


//fungsi untuk user Register
Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');

// fungsi untuk login User
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'authenticate']);

// fungsi untuk logout user
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/logout', [UserController::class, 'logout_action'])->name('logout.action');

// ubah pachange_password
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');

// mengambil data dari database users registrasi dan ditampilkan kehalaman pengguna
Route::get('user', [UserController::class, 'index'])->name('pengguna');

//menampilkan data order dan ditampilkan ke tabel data transaksi


//mengambil paket internet didatabase
Route::get('/', [UserController::class, 'paket']);

// Logout admin
Route::post('/logout', [UserController::class, 'logout_admin'])->name('logout_admin');


//menampilkan halaman beberapa langkan untuk melakukan order/transaksi
Route::get('/order', [OrderController::class, 'summary'])->name('summary');
Route::post('/checkout', [OrderController::class, 'checkout']);
Route::delete('/admin/menu/tagihan/{id}', [OrderController::class, 'destroy']);
Route::get('transaksi.detail_order', [OrderController::class, 'detail_order'])->name('detail_order');
Route::get('transaksi.invoice/{id}', [OrderController::class, 'invoice'])->name('invoice');

//melakukan transaksi manual pada halaman transaksi.
Route::get('/admin/manual/lunas/{id}', [OrderController::class, 'manual']);

// menampilkan halaman index user
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Cetak Invoice
Route::get('/invoice.cetak/{id}', [InvoiceController::class, 'print'])->name('invoice.cetak');
Route::post('/user/agen', [AgenController::class, 'ajukan']);


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/homedashboard', [UserController::class, 'jumlah']);
    Route::get('/Lpengguna', [PenggunaController::class, 'index'])->name('Lpengguna');
    Route::get('/admin/menu/Tambahpengguna', [PenggunaController::class, 'create']);
    Route::post('/admin/menu/store', [PenggunaController::class, 'store']);
    Route::get('/admin/menu/pengguna/{id}/edit', [PenggunaController::class, 'edit']);
    Route::put('/admin/menu/{id}', [PenggunaController::class, 'update']);
    Route::delete('/admin/menu/pengguna/{id}', [PenggunaController::class, 'destroy']);

    Route::get('/admin/menu/Tambahpengguna', [LaporanController::class, 'dataAccordion']);
    Route::get('/laporanBul', [LaporanController::class, 'laporanBulanan']);
    Route::get('/admin/menu/Tambahpengguna', [LaporanController::class, 'dataAccordion']);
    Route::get('/admin/header', [LaporanController::class, 'date']);

    Route::get('/Agen', [AgenController::class, 'index_agen'])->name('agen');
    Route::get('/admin/menu/TambahAgen', [AgenController::class, 'create']);
    Route::post('/admin/menu/TambahAgen/store', [AgenController::class, 'store']);
    Route::get('/admin/menu/{id}/editAgen', [AgenController::class, 'edit']);
    Route::put('/admin/menu/update/{id}', [AgenController::class, 'update']);
    Route::delete('/admin/menu/Agen/{id}', [AgenController::class, 'destroy']);
    Route::get('/admin/manual/status/lunas/{id}', [AgenController::class, 'manual']);
    Route::get('/Agen', [AgenController::class, 'cari'])->name('DataAgen');

    Route::get('/LihatTagihan', [BuatTagihanController::class, 'ViewTagihan'])->name('Lihat_tagihan');
    Route::post('/admin/menu/btagihan', [BuatTagihanController::class, 'BuatTagihan']);
    Route::get('/admin/menu/Lunas/{id}', [BuatTagihanController::class, 'Lunas']);
    Route::delete('/admin/menu/LihatTagihan/{id}', [BuatTagihanController::class, 'destroy']);

    Route::get('/btagihan', [BuatTagihanController::class, 'btagihan']);
    Route::get('/UpdateLinkPayment', [BuatTagihanController::class, 'UpdateLink'])->name('UpdateLinkPayment');
    Route::post('/admin/menu/storeLink', [BuatTagihanController::class, 'storeLink']);
    Route::get('/admin/menu/paymentlink/{id}/edit', [BuatTagihanController::class, 'edit']);
    Route::put('/admin/menu/paymentlink/{id}', [BuatTagihanController::class, 'update']);

    Route::get('/tagihan', [UserController::class, 'transaksi'])->name('transaksi');
});
