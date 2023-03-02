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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

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
            background: linear-gradient(to bottom, rgba(253, 253, 254, 0), rgba(39, 84, 129, 0.7)),
                url("{{ asset('pengguna/img/bg6.jpg') }}") no-repeat center;
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
            color: rgb(255, 255, 255);
            /* color: #225fc3; */
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

        /* chat bubble */
    </style>

    @include ('app')
    <!-- Custom styles for this template -->
    <link href="{{ asset('pengguna/pricing.css') }}" rel="stylesheet" />
</head>

<body>
    @include('user/navbar')
    <div id="intro" class="bg-image vh-100 shadow-1-strong">
        <video style="min-width: 100%; min-height: 100%;" playsinline autoplay muted loop>
            <source class="h-100" src="{{ asset('pengguna/video/Lines.mp4') }}" type="video/mp4" />
        </video>
        <div class="mask"
            style="
        background: linear-gradient(
          45deg,
          rgba(135, 175, 230, 0),
          rgba(6, 29, 128, 0) 100%
        );
      ">
            <div class="container d-flex align-items-center justify-content-center text-center h-100">
                <div class="hero-text">
                    <div class="text-white">
                        <h1 class="mb-3">Paket Internet Terbaik!</h1>
                        <h5 class="mb-4">Dapatkan kecepatan internet tercepat dan unlimited dengan harga
                            terjangkau!
                        </h5>
                        <a class="btn btn-outline-light btn-lg m-2" href="#paket">Beli
                            Sekarang!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <section class="hero">
        <div class="container-fluid py-1">
            <header> --}}
    {{-- <div class="d-flex flex-column flex-md-row align-items-center p-3 mx-4">
                    <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                        <img src="{{ asset('pengguna/img/tanpa_wifi.png') }}" alt="" width="35">
                    </a>
                    <span class=" fs-4 text-white "><strong><a href="/" class="text-decoration-none text-white">
                                TUNSANET</a></strong></span>
                    <nav class=" d-inline-flex mt-2 mt-md-0 ms-md-auto">
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
                            <a class="me-3 py-2 text-dark text-decoration-none btn btn-secondary"
                                href="{{ route('register') }}">Daftar</a>
                            <a class="py-2 text-dark-decoration-none btn btn-primary" href="{{ route('login') }}">Login</a>
                        @endguest
                    </nav>
                </div> --}}
    <!-- Container wrapper -->
    {{-- </nav>
                <div class="hero-text">
                    <h1>Paket Internet Terbaik!</h1>
                    <p>Dapatkan kecepatan internet tercepat dan unlimited dengan harga terjangkau!</p>
                    <a href="#paket" class="btn btn-primary btn-lg">Beli Sekarang!</a>
                </div>
            </header>
    </section> --}}

    <div class="paket-h1 p-3">
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center mt-5" id="paket">
            <h3 class="display-4"><b>Paket Internet Rumahan</b></h3>
            <p class="fs-5 text-muted">
                Internet Cepat dan ngebut dengan Layanan Wifi TUNSANET!
            </p>
        </div>
    </div>
    </header>
    <main class="container mb-2">
        <div class=" row row-cols- row-cols-md-3 mb-3 text-center p-2">
            @foreach ($paketInternets as $paket)
                <div class="col-sm-4" id="paket">
                    <div class="card mb-4 rounded-3 shadow-sm border-primary">
                        <div class="card-header py-3 text-bg-primary border-primary">
                            <h4 class="my-0 fw-normal">{{ $paket->nama_paket }}</h4>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('pengguna/img/gold.png') }}" width="50%" alt="">
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

    </main>
    <section id="kelebihan" class="bg-light py-5">
        <div class="container">
            <div class="paket-h1">
                <h2 class="text-center mb-5"><strong>Kelebihan Internet Kami</strong></h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body d-flex">
                            {{-- <img class="mr-4" src="{{ asset('pengguna/img/1.png') }}" width="50%"
                                alt="Koneksi Stabil"> --}}
                            <video style="min-width: 50%; min-height: 50%;" playsinline autoplay muted loop>
                                <source class="h-100" src="{{ asset('pengguna/video/animasi 3.mp4') }}"
                                    type="video/mp4" />
                            </video>
                            <div>
                                <h4 class="card-title">Koneksi Paling Stabil</h4>
                                <p class="card-text">Kami menawarkan koneksi internet yang stabil sehingga dapat
                                    memudahkan Anda dalam menjalankan aktivitas online.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body d-flex">
                            {{-- <img class="mr-4" src="{{ asset('pengguna/img/2.png') }}" width="50%"
                                alt="Kecepatan Tinggi"> --}}
                            <video style="min-width: 50%; min-height: 50%;" playsinline autoplay muted loop>
                                <source class="h-100" src="{{ asset('pengguna/video/animasi 2.mp4') }}"
                                    type="video/mp4" />
                            </video>
                            <div>
                                <h4 class="card-title">Kecepatan Tinggi</h4>
                                <p class="card-text">Dengan kecepatan internet yang tinggi, Anda dapat melakukan
                                    browsing, streaming, dan download dengan mudah dan lancar.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body d-flex">
                            {{-- <img class="mr-4" src="{{ asset('pengguna/img/3.png') }}" width="50%"
                                alt="Pilihan Paket yang Fleksibel"> --}}
                            <video style="min-width: 50%; min-height: 50%;" playsinline autoplay muted loop>
                                <source class="h-100" src="{{ asset('pengguna/video/animasi 1.mp4') }}"
                                    type="video/mp4" />
                            </video>
                            <div>
                                <h4 class="card-title">Pilihan Paket yang Fleksibel</h4>
                                <p class="card-text">Kami menyediakan berbagai pilihan paket internet dengan harga
                                    yang
                                    terjangkau dan fitur yang sesuai dengan kebutuhan Anda.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="bantuan" class="py-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" id="kontak">
                    <img src="{{ asset('pengguna/img/operator.jpg') }}" width="90%" class="img-fluid"
                        alt="Bantuan 24/7">
                </div>
                <div class="col-lg-6">
                    <h2><strong>Bantuan 24/7</strong></h2>
                    <p>Kami siap membantu Anda kapan saja dan di mana saja. Jika Anda mengalami masalah dengan
                        layanan
                        internet kami, silakan hubungi kami melalui:</p>
                    <ul>
                        <li><i class="fa fa-phone"></i> 0800-123-4567 (24 jam)</li>
                        <li><i class="fa fa-envelope"></i> BumdesTunsa@gmail.com</li>
                        <li><i class="fa fa-comment"></i> Live chat (24 jam)</li>
                    </ul>
                    <p>Kami akan segera merespon aduan Anda dan memberikan solusi terbaik untuk Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <h2>Pertanyaan yang sering ditanyakan</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="accordion mb-3 " id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Apa itu Tunsanet?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Tunsanet adalah Badan Usaha Milik Desa Tunjungsari yang memberikan pelayanan wifi
                                kepada
                                warga sekitar untuk meningkatkan perekonomian desa Tunjungsari.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Bagaimana cara melakukan pembayarannya?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Jika anda melakukan pembelian melalui website ini maka akan terdapat 2 opsi
                                pembayaran<br>
                                1. pembayaran menggunakan cashless atau secara online , anda hanya tinggal mengikuti
                                intruksi yang ada untuk melakukan pembayaran, opsi pembayaran online nya juga
                                bervariasi
                                anda dapat menentukannya sendiri. <br>
                                2. pembayaran secara manual, anda dapat datang ke kantor atau anda dapat
                                menguhubungi
                                petugas Bumdes Tunsanet untuk melakukan pembayaran.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Apakah setelah pembelian akan segera dilakukan pemasangan?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Pemasangan akan dilakukan ketika pembeli sudah melakukan konfirmasi pembayaran
                                kepada
                                petugas melalui whatsapp maupun secara langsung dengan menyertakan bukti pembayaran.
                            </div>
                        </div>
                    </div>
                </div>
                <a href="/FAQ"> <button type="button" class="btn btn-primary btn-rounded">
                        Selengkapnya</button></a>
            </div>
            <div class="col-md-6 justify-content-end">
                <img src="{{ asset('pengguna/img/FAQ.png') }}" width="90%" alt="gambar FAQ" class="img-fluid">
            </div>
        </div>
    </div>
    @include('user/footer')
    </div>
    @include('user/chat_bubble')
</body>

</html>
