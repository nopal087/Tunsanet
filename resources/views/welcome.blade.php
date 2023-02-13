<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
    <meta name="generator" content="Hugo 0.104.2" />
    <title>WIFI | BUMDES TUNJUNGSARI</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/pricing/" />

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

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <div class="container-fluid py-3 px-5">
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
                    {{-- @auth
                        <p><b>Welcome </b>{{ auth()->user()->name }}</p>
                        <div>
                            <a class="py-2 text-dark text-decoration-none" href="{{ route('welcome') }}">Logout</a>
                        </div>

                    @endauth --}}
                    {{-- @guest --}}
                    <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('register') }}">Daftar</a>
                    <a class="py-2 text-dark text-decoration-none" href="{{ route('login') }}">Login</a>
                    {{-- @endguest --}}
                </nav>
            </div>

            <section class="hero">
                <div class="">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <h1 class="hero-heading text-primary-emphasis">Internet dengan Tunsanet</h1>
                            <p class="mt-3 d-flex align-items-center">
                                <span class="material-symbols-outlined me-2 text-primary">
                                    language
                                </span> internet stabil
                            </p>
                            <p class="d-flex align-items-center">
                                <span class="material-symbols-outlined me-2 text-primary">
                                    headset_mic
                                </span> Bantuan 24/7
                            </p>
                            <span class="hero-subheading">Rp</span>
                            <span class="hero-subheading display-4 fw-bold text-primary-emphasis">150,000</span>
                            <span class="hero-subheading">/bulan</span>

                            <p class="mt-4 mb-1 ">
                                <a href="#paket" class="btn btn-primary btn-md">Pilih Paket sekarang !</a>
                            <p class="d-flex align-items-center ">
                                <span class="material-symbols-outlined me-2 text-primary">
                                    verified_user
                                </span> jaminan lancar
                            </p>
                            </p>

                        </div>
                        <div class="col-lg-5 mb-5 pb-4">
                            <img src="{{ asset('pengguna/img/Logo_Stempel.png') }}" class="img-fluid" alt="Hero Image">
                        </div>
                    </div>
                </div>
            </section>

            <div class="pricing-header p-3 pb-md-4 mx-auto text-center" id="paket">
                <h1 class="display-4 fw-normal">Paket Internet Rumahan</h1>
                <p class="fs-5 text-muted">
                    Internet Cepat dan ngebut dengan Layanan Wifi TUNSANET!
                </p>
            </div>
        </header>

        <main class="container">
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm border-primary">
                        <div class="card-header py-3 text-bg-primary border-primary">
                            <h4 class="my-0 fw-normal">Silver</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">
                                6 Mbps <h4><small class="text-muted fw-light">Unlimited</small></h4>
                            </h1>
                            <h5 class="card-title pricing-card-title">
                                Rp. 150.000<small class="text-muted fw-light">/bulan</small>
                            </h5>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li> Cocok digunakan untuk 1-5 Perangkat secara bersamaan</li>
                            </ul>
                            <a href="/login"><button type="button" class="w-100 btn btn-lg btn-primary">
                                    Pilih
                                </button></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm border-primary">
                        <div class="card-header py-3 text-bg-primary border-primary">
                            <h4 class="my-0 fw-normal">Gold</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">
                                8 Mbps<h4><small class="text-muted fw-light">Unlimited</small></h4>
                            </h1>
                            <h5 class="card-title pricing-card-title">
                                Rp. 180.000<small class="text-muted fw-light">/bulan</small>
                            </h5>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Cocok digunakan untuk 2-7 Perangkat secara bersamaan</li>
                            </ul>
                            <a href="/login"><button type="button" class="w-100 btn btn-lg btn-primary">
                                    Pilih
                                </button></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm border-primary">
                        <div class="card-header py-3 text-bg-primary border-primary">
                            <h4 class="my-0 fw-normal">Diamond</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">
                                10 Mbps<h4><small class="text-muted fw-light">Unlimited</small></h4>
                            </h1>
                            <h5 class="card-title pricing-card-title">
                                Rp. 220.000<small class="text-muted fw-light">/bulan</small>
                            </h5>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Cocok digunakan untuk 3-10 perangkat bersamaan</li>
                            </ul>
                            <a href="/login"><button type="button" class="w-100 btn btn-lg btn-primary">
                                    Pilih
                                </button></a>
                        </div>
                    </div>
                </div>
            </div>


            <footer class="pt-4 my-md-5 pt-md-5 border-top">
                <div class="row">
                    <div class="col-12 col-md">
                        <img class="mb-2" src="{{ asset('pengguna/img/tanpa_wifi.png') }}" alt=""
                            width="24" height="19" />
                        <small class="d-block mb-3 text-muted">&copy; 2022–2023</small>
                    </div>
                    <div class="col-6 col-md">
                        <h5>Features</h5>
                        <ul class="list-unstyled text-small">
                            <li class="mb-1">
                                <a class="link-secondary text-decoration-none" href="#">Cool stuff</a>
                            </li>
                            <li class="mb-1">
                                <a class="link-secondary text-decoration-none" href="#">Random feature</a>
                            </li>
                            <li class="mb-1">
                                <a class="link-secondary text-decoration-none" href="#">Team feature</a>
                            </li>
                            <li class="mb-1">
                                <a class="link-secondary text-decoration-none" href="#">Stuff for developers</a>
                            </li>
                            <li class="mb-1">
                                <a class="link-secondary text-decoration-none" href="#">Another one</a>
                            </li>
                            <li class="mb-1">
                                <a class="link-secondary text-decoration-none" href="#">Last time</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5>Resources</h5>
                        <ul class="list-unstyled text-small">
                            <li class="mb-1">
                                <a class="link-secondary text-decoration-none" href="#">Resource</a>
                            </li>
                            <li class="mb-1">
                                <a class="link-secondary text-decoration-none" href="#">Resource name</a>
                            </li>
                            <li class="mb-1">
                                <a class="link-secondary text-decoration-none" href="#">Another resource</a>
                            </li>
                            <li class="mb-1">
                                <a class="link-secondary text-decoration-none" href="#">Final resource</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5>About</h5>
                        <ul class="list-unstyled text-small">
                            <li class="mb-1">
                                <a class="link-secondary text-decoration-none" href="#">Team</a>
                            </li>
                            <li class="mb-1">
                                <a class="link-secondary text-decoration-none" href="#">Locations</a>
                            </li>
                            <li class="mb-1">
                                <a class="link-secondary text-decoration-none" href="#">Privacy</a>
                            </li>
                            <li class="mb-1">
                                <a class="link-secondary text-decoration-none" href="#">Terms</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer>
    </div>
</body>

</html>
