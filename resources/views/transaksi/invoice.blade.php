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



    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, 0.1);
            border: solid rgba(0, 0, 0, 0.15);
            border-width: 1px 0;
            box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
                inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -0.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>

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
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                    {{-- Navbar Bumdes --}}
                    <nav class="navbar">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">
                                <img src="{{ asset('pengguna/img/tanpa_wifi.png') }}" alt="Logo" width="35"
                                    height="30" class="d-inline-block align-text-top">
                            </a>
                        </div>
                    </nav>
                    <span class="fs-4">TUNSANET</span>
                </a>

                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                    @auth

                        <div>
                            {{-- <li class="nav-item dropdown"> --}}
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                            </ul>

                            {{-- <a class="py-2 text-dark text-decoration-none" href="{{ route('logout') }}">Logout</a> --}}
                        </div>
                    @endauth
                    @guest
                        <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('register') }}">Daftar</a>
                        <a class="py-2 text-dark text-decoration-none" href="{{ route('login') }}">Login</a>
                    @endguest

                </nav>
            </div>

            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-8 fw-normal">Invoice</h1>
                {{-- <p class="fs-5 text-muted">
                    Internet Cepat dan ngebut dengan Layanan Wifi TUNSANET!
                </p> --}}
            </div>
        </header>

        <main>
            <div class="row g-5 justify-content-center">
                <div class="col-md-7 col-lg-8">
                    {{-- <div class="border rounded p-3 ">
                        <li class="list-group-item d-flex justify-content-between lh-lg mb-3">
                            <div>
                                <h4 class="my-0">Detail Pesanan</h4>
                            </div>
                            <small
                                class="text-muted">{{ $order->updated_at->translatedFormat('l, d F Y : H:i') }}</small>

                        </li>
                        {{-- <h4 class="mb-1">Detail Pesanan</h4> --}}
                    {{-- <div>
                        <h6 class="d-flex align-items-center"><small class="text-muted badge text-bg-warning "><span
                                    class="material-symbols-outlined m-2 ">
                                    warning
                                </span>Silahkan Screenshot halaman ini sebagai
                                bukti pembayaran!</small>
                        </h6>
                    </div>
                    <div class="row g-3">

                        <div class="row g-3">

                            <ul class="list-group mt-3">
                                <li class="list-group-item d-flex justify-content-between lh-lg">
                                    <div>
                                        <h6 class="my-0">Nama :</h6>
                                    </div>
                                    <small class="text-muted">{{ $order->nama }}</small>

                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-md">
                                    <div>
                                        <h6 class="my-0">No. Telephone :</h6>
                                    </div>
                                    <small class="text-muted">{{ $order->phone }}</small>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-lg">
                                    <div>
                                        <h6 class="my-0">Alamat :</h6>
                                    </div>
                                    <small class="text-muted ">{{ $order->alamat }}</small>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-md">
                                    <div>
                                        <h6 class="my-0">Paket :</h6>
                                    </div>
                                    <small class="text-muted">{{ $order->paket }}</small>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-md">
                                    <div>
                                        <h6 class="my-0">Status :</h6>
                                    </div>
                                    <label
                                        class="badge text-{{ $order->status == 'Paid' ? 'bg-success' : 'bg-danger' }}">{{ $order->status == 'Paid' ? 'Lunas' : 'Belum Lunas' }}</label>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-md">
                                    <div>
                                        <h6 class="my-0">Total :
                                        </h6>
                                    </div>
                                    <small class="text-muted">IDR.
                                        {{ number_format($order->total_price) }}</small>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div> --}}



                    {{-- <button class="w-100 btn btn-primary btn-lg mt-3" type="submit">kembali</button> --}}

                </div>
            </div>
            <div class="invoice p-3 mb-3">
                <!-- title row -->
                <div class="row">
                    <div class="col-8 d-flex">
                        <img src="{{ asset('AdminLTE/dist/img/logo-bumdes.jpg') }}" class="img-circle elevation-1"
                            width="20" height="20" alt="User Image">
                        <i class="fas fa-globe"></i>
                        <h4> Bumdes Sari Rejeki,</h4>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <small class="float-right">{{ $order->updated_at->translatedFormat('l, d F Y : H:i') }}</small>
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
                        </address>
                    </div>
                    <!-- /.col -->

                    <!-- /.col -->
                </div>
                <!-- /.row -->

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
                                            class="badge text-{{ $order->status == 'Paid' ? 'bg-success' : 'bg-danger' }}">{{ $order->status == 'Paid' ? 'Lunas' : 'Belum Lunas' }}</label>
                                    </td>
                                    <td>IDR. {{ number_format($order->total_price) }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.col -->
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
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- this row will not appear when printing -->
                <div class="row no-print">
                    <div class="col-4">
                        <a href="/" class="w-100 btn btn-primary btn-lg mt-3">Kembali</a>
                    </div>
                    <div class="col-4">
                        <a class="w-100 btn btn-success btn-lg mt-3" target="_blank"
                            href="https://wa.me/6285712666154?text=Hallo%20petugas%20bumdes%20saya%20ingin%20melampirkan%20bukti%20pembayaran,%20berikut%20bukti%20pembayarannya%20Terimakasih">
                            Whatsapp
                            </i>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="{{ route('invoice.cetak', $order->id) }}" rel="noopener" target="_blank"
                            class="w-100 btn btn-secondary btn-lg mt-3"><i class="fas fa-print"></i> Cetak</a>
                    </div>
                </div>
            </div>
        </main>

        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-12 col-md">
                    <img class="mb-2" src="{{ asset('pengguna/img/tanpa_wifi.png') }}" alt="" width="24"
                        height="19" />
                    <small class="d-block mb-3 text-muted">&copy; 2022–2023</small>
                </div>
            </div>
        </footer>
    </div>
</body>


</html>
