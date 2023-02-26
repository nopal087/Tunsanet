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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@200;400&family=Pacifico&display=swap"
        rel="stylesheet">


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

        /* style coba */
        .hero {
            background: linear-gradient(to bottom, rgba(16, 127, 226, 0.85), rgba(7, 63, 112, 0.85)),
                url("{{ asset('pengguna/img/pemandangan.jpg') }}") no-repeat center;
            background-size: cover;
            height: 100vh;
            position: relative;
        }

        /* Styling untuk teks di atas background */
        .hero-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
            width: 80%;
            max-width: 800px;
            font-family: 'Gloock', serif;

        }

        .paket-h1 {
            font-family: 'Gloock', serif;
        }

        .hero-text h1 {
            font-size: 5rem;
            margin-bottom: 1rem;
        }

        .hero-text p {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .hero-text button {
            background-color: #0c7cd5;
            border: none;
            color: #fff;
            padding: 1rem 2rem;
            font-size: 1.2rem;
            cursor: pointer;
        }

        /* Styling untuk responsif */
        @media only screen and (max-width: 768px) {
            .hero-text {
                width: 90%;

            }

            .hero-text h1 {
                font-size: 3rem;
            }

            .hero-text p {
                font-size: 1.2rem;
            }

            .hero-text button {
                font-size: 1rem;
            }
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
    <section class="hero">
        <div class="container-fluid py-1">
            <header>
                <div class="d-flex flex-column flex-md-row align-items-center p-2">
                    <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                        {{-- Navbar Bumdes --}}
                        <nav class="navbar mx-2">
                            <div class="bg-light rounded-3">
                                <a class="" href="/">
                                    <img src="{{ asset('pengguna/img/tanpa_wifi.png') }}" alt="Logo" width="35"
                                        height="30" class="d-inline-block align-text-top">
                                </a>
                            </div>
                        </nav>
                    </a>
                    <span class=" fs-4 text-white "><strong><a href="/" class="text-decoration-none text-white">
                                TUNSANET</a></strong></span>
                    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                        @auth
                            <div class="text-white ml-3">
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
                            <a class="me-3 py-2 text-white text-decoration-none btn btn-outline-white"
                                href="{{ route('register') }}">Daftar</a>
                            <a class="py-2 text- white-decoration-none btn btn-light" href="{{ route('login') }}">Login</a>
                        @endguest
                    </nav>
                </div>

                {{-- <div class="">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <h1 class="hero-heading text-primary-emphasis"><b>Internet cepat dengan Tunsanet</b></h1>
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
                            <img src="{{ asset('pengguna/img/Logo_Stempel.png') }}" class="img-fluid " alt="Hero Image">
                        </div>
                    </div>
                </div> --}}
                <div class="hero-text">
                    <h1>Paket Internet Terbaik!</h1>
                    <p>Dapatkan kecepatan internet tercepat dan unlimited dengan harga terjangkau!</p>
                    <a href="#paket" class="btn btn-light btn-lg">Beli Sekarang!</a>
                </div>
            </header>
    </section>

    <div class="paket-h1">
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center mt-5" id="paket">
            <h3 class="display-4 text-primary-emphasis"><b>Paket Internet Rumahan</b></h3>
            <p class="fs-5 text-muted">
                Internet Cepat dan ngebut dengan Layanan Wifi TUNSANET!
            </p>
        </div>
    </div>
    </header>

    <main class="container ">
        <div class=" row row-cols- row-cols-md-3 mb-3 text-center">
            @foreach ($paketInternets as $paket)
                <div class="col-sm-4">
                    <div class="card mb-4 rounded-3 shadow-sm border-primary">
                        <div class="card-header py-3 text-bg-primary border-primary">
                            <h4 class="my-0 fw-normal">{{ $paket->nama_paket }}</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">
                                {{ $paket->kecepatan }} <h4><small class="text-muted fw-light">Unlimited</small>
                                </h4>
                            </h1>
                            <h5 class="card-title pricing-card-title">
                                Rp. {{ number_format($paket->harga) }}<small class="text-muted fw-light">/bulan</small>
                            </h5>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>{{ $paket->deskripsi }}</li>
                            </ul>
                            @auth
                                <a href={{ route('summary', ['id' => $paket->id]) }}><button type="button"
                                        class="w-100 btn btn-lg btn-primary">
                                        Pilih
                                    </button></a>
                            @endauth
                            @guest
                                <a href={{ route('login') }}><button type="button" class="w-100 btn btn-lg btn-primary">
                                        Pilih
                                    </button></a>
                            @endguest
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-12 col-md">
                    <img class="mb-2" src="{{ asset('pengguna/img/tanpa_wifi.png') }}" alt="" width="24"
                        height="19" /> Tunsanet
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
            </div>
        </footer>
        </div>
</body>

</html>
