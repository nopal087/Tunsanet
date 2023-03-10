<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
    <meta name="generator" content="Hugo 0.104.2" />

    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->

    <title>WIFI | Pesanan</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/pricing/" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link href="{{ asset('pengguna/css/bootstrap.min.css') }}" rel="stylesheet" />

    @include ('app')

    <!-- Custom styles for this template -->
    <link href="{{ asset('pengguna/pricing.css') }}" rel="stylesheet" />
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <div class="container py-3">
        <header>
            {{-- <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none py-3">
                    <img src="{{ asset('pengguna/img/tanpa_wifi.png') }}" alt="" width="35">
                    <span class=" fs-2"><strong><a href="/" class="text-decoration-none text-secondary">
                                TUNSANET</a></strong></span>
                </a>

                </a>

                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                    @auth

                        <div>
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                            </ul>
                        </div>
                    @endauth
                    @guest
                        <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('register') }}">Daftar</a>
                        <a class="py-2 text-dark text-decoration-none" href="{{ route('login') }}">Login</a>
                    @endguest

                </nav>
            </div> --}}
            @include('user/navbar')
        </header>

        <main class="mb-10">
            <div class="container mt-5">
                <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                    <h1 class="display-8 fw-bold text-secondary ">Invoice</h1>
                </div>
                {{-- <div class="row"> --}}
                <div class="col-12">
                    <div class="row g-5 justify-content-center">
                        <div class="col-md-7 col-lg-8">
                        </div>
                    </div>
                    <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-8 d-flex">
                                <img src="{{ asset('AdminLTE/dist/img/logo-bumdes.jpg') }}"
                                    class="img-circle elevation-1" width="20" height="20" alt="User Image">
                                {{-- <i class="fas fa-globe"></i> --}}
                                <h4> Bumdes Sari Rejeki,</h4>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <small
                                    class="float-right">{{ $order->updated_at->translatedFormat('l, d F Y : H:i') }}</small>
                            </div>
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                Dari :
                                <address>
                                    <strong>Bumdes Tunjungsari</strong><br>
                                    Tunjungsari<br>
                                    Pekalongan<br>
                                    Phone: 08992929922<br>
                                    Email: Bumdes@gmail.com
                                </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                Kepada :
                                <address>
                                    <strong>{{ $order->nama }}</strong><br>
                                    {{ $order->alamat }}<br>
                                    {{ $order->phone }}
                                </address>
                            </div>
                        </div>

                        <!-- Table row -->
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Paket</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>{{ $order->paket }}</td>
                                            <td><label
                                                    class="badge rounded-pill badge-{{ $order->status == 'Paid' ? 'success' : 'danger' }}">{{ $order->status == 'Paid' ? 'Lunas' : 'Belum Lunas' }}</label>
                                            </td>
                                            <td>IDR. {{ number_format($order->total_price) }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <!-- accepted payments column -->
                    <div class="col-6">

                    </div>
                    <!-- /.col -->
                    <div class="col-6">


                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th style="width:50%">Subtotal:</th>
                                    <td>IDR. {{ number_format($order->total_price) }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row no-print">
                    <div class="col-8">
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Terimakasih telah melakukan pembelian</h4>
                            <p>Silahkan cetak invoice ini dan simpan diperangkat anda, setelah itu tekan tombol whatsapp
                                untuk mengirimkan bukti transaksi berupa invoice kepada petugas</p>
                        </div>

                    </div>

                    <div class="col-4">
                        <a href="{{ route('invoice.cetak', $order->id) }}" rel="noopener" target="_blank"
                            class="w-100 btn btn-secondary btn-lg mt-3"><i class="fas fa-print"></i> Cetak</a>
                        <a class="w-100 btn btn-success btn-lg mt-3" target="_blank"
                            href="https://wa.me/6285712666154?text=Hallo%20petugas%20bumdes%20saya%20ingin%20melampirkan%20bukti%20pembayaran,%20berikut%20bukti%20pembayarannya%20Terimakasih">
                            <i class="fab fa-whatsapp"></i> WA
                        </a>
                        <a href="/" class="w-100 btn btn-primary btn-lg mt-3">Beranda</a>
                    </div>
                </div>
            </div>
    </div>
    </main>

    @include('user/footer')
    </div>
</body>


</html>
