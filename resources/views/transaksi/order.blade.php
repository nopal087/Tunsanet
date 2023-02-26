<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
    <meta name="generator" content="Hugo 0.104.2" />
    <title>WIFI | Pesanan</title>

    <!-- Load CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Load JavaScript jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <!-- Load JavaScript Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <!-- Load JavaScript Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


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
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                    {{-- Navbar Bumdes --}}
                    <nav class="navbar">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="/">
                                <img src="{{ asset('pengguna/img/tanpa_wifi.png') }}" alt="Logo" width="35"
                                    height="30" class="d-inline-block align-text-top">
                            </a>
                        </div>
                    </nav>
                    <span class=" fs-4"><strong><a href="/" class="text-decoration-none text-secondary">
                                TUNSANET</a></strong></span>
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
                <h1 class="display-8 fw-normal">Selesaikan pesanan</h1>
                <p class="fs-5 text-muted">
                    Internet Cepat dan ngebut dengan Layanan Wifi TUNSANET!
                </p>
            </div>
        </header>

        <main>

            <div class="row g-2 mb-3">
                <div class="col-md-5 col-lg-4 order-md-last border rounded p-3 h-25">
                    <h4 class="d-flex justify-content-between align-items-center mb-1">
                        <span class="">Ringkasan</span>
                    </h4>
                    <h6><small class="text-muted">Detail ringkasan !</small></h6>
                    <form class="needs-validation mt-4" action="checkout" method="POST">
                        @foreach ($paketInternets as $paket)
                            @if ($paket->id == $id)
                                <ul class="list-group mt-3">
                                    <li class="list-group-item d-flex justify-content-between lh-lg">
                                        <div>
                                            <h6 class="my-0">Paket Internet</h6>
                                            <small class="text-muted">{{ $paket->nama_paket }}</small>
                                        </div>
                                        <span class="text-muted">Rp.{{ number_format($paket->harga) }}</span>
                                    </li>
                                    <input type="hidden" class="form-control" name="paket" id="paket"
                                        placeholder="" value="{{ $paket->nama_paket }}" required>
                                    <li class="list-group-item d-flex justify-content-between lh-md">
                                        <div>
                                            <h6 class="my-0">Biaya Pemasangan</h6>
                                            <small class="text-muted">untuk pertama kali pembelian</small>
                                        </div>
                                        <span class="text-muted">Rp.{{ number_format($biaya_pemasangan) }}</span>
                                    </li>
                                    <span></span>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>Total</span>
                                        <strong>Rp. {{ $paket->harga + $biaya_pemasangan }}</strong>
                                        <input type="hidden" id="total_price" name="total_price"
                                            value="{{ $paket->harga + $biaya_pemasangan }}">
                                    </li>
                                </ul>
                            @endif
                        @endforeach
                        {{-- data diri pengguna/pembeli --}}
                </div>
                <div class="col-md-7 col-lg-8">
                    <div class="border rounded p-3">
                        <h4 class="mb-1">Lengkapi data diri</h4>
                        <h6><small class="text-muted">Silahkan isi data diri anda dengan lengkap !</small></h6>

                        {{-- @foreach ($user as $usr) --}}
                        {{-- @if ($user->auth()->id == $id) --}}
                        @csrf
                        <div class="border rounded p-3">
                            <div class="row g-3">
                                <div class="col-sm-12">
                                    <label for="nama" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" id="nama"
                                        placeholder="Masukkan Nama Lengkap" value="{{ $user->name }}" required>
                                    <div class="invalid-feedback">
                                        Mohon isi nama lengkap
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="phone" class="form-label">No handphone (<b>wa</b>) <span
                                            class="text-muted"></span></label>
                                    <input type="text" class="form-control" name="phone" id="phone"
                                        placeholder="+6285712666154" value="{{ $user->no_hp }}">
                                    <div class="invalid-feedback">
                                        Please enter a valid phone.
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea name="alamat" class="form-control mb-3" id="alamat" cols="30" rows="5"
                                        placeholder="Masukkan alamat lengkap disini">{{ $user->alamat }}</textarea>

                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="w-100 btn btn-primary btn-lg mt-3" data-bs-toggle="modal"
                        data-bs-target="#confirmModal" type="button">Lanjutkan</button>

                    <!-- Modal -->
                    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="confirmModalLabel">Lanjutkan Ke Pembayaran</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Pastikan data diri anda sudah sesuai! </br></br> Apakah Anda yakin ingin
                                    melanjutkan?
                                    data anda akan masuk ke admin dalam status belum bayar, segera lakukan
                                    pembayaran cashless atau dapat melakukan pembayaran lewat petugas
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary"
                                        data-bs-dismiss="modal">lanjutkan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </main>

        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-12 col-md">
                    <img class="mb-2" src="{{ asset('pengguna/img/tanpa_wifi.png') }}" alt=""
                        width="24" height="19" />
                    <small class="d-block mb-3 text-muted">&copy; 2022–2023</small>
                </div>
                <div class="col-6 col-md">
                    <h5>Lokasi</h5>
                    <ul class="list-unstyled text-small">
                        <li class="mb-1">
                            <a class="link-secondary text-decoration-none" href="#">Tunjungsari</a>
                        </li>
                        <li class="mb-1">
                            <a class="link-secondary text-decoration-none" href="#">Kec. Siwalan</a>
                        </li>
                        <li class="mb-1">
                            <a class="link-secondary text-decoration-none" href="#">Kab. Pekalongan</a>
                        </li>
                        <li class="mb-1">
                            <a class="link-secondary text-decoration-none" href="#">Jawa Tengah</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Contact</h5>
                    <ul class="list-unstyled text-small">
                        <li class="mb-1">
                            <a class="link-secondary text-decoration-none" href="#">Bumdes@gmail.com</a>
                        </li>
                        <li class="mb-1">
                            <a class="link-secondary text-decoration-none" href="#">08671222222</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Tentang</h5>
                    <ul class="list-unstyled text-small">
                        <li class="mb-1">
                            <a class="link-secondary text-decoration-none" href="#">Nopal Tech</a>
                        </li>
                    </ul>
                </div>
        </footer>
    </div>
</body>

</html>
