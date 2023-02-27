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
    @include ('app')
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
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none py-3">
                    <img src="{{ asset('pengguna/img/tanpa_wifi.png') }}" alt="" width="35">
                    <span class=" fs-2"><strong><a href="/" class="text-decoration-none text-secondary">
                                TUNSANET</a></strong></span>
                </a>
            </div>
            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-8 fw-normal">Terimakasih</h1>
                <p class="fs-5 text-muted">
                    Terimakasih telah melakukan pembayaran paket internet dari Tunsanet,
                    silahkan lakukan konfirmasi kepada petugas dengan menekan tombol dibawah
                </p>

                <img src="{{ asset('pengguna/img/invoice.png') }}" width="50%" alt="">
        </header>

        <main>
            <div class="row g-5 justify-content-center mb-10">
                <div class="text-center">

                    <a href="https://wa.me/6285712666154?text=Hallo%20petugas%20bumdes%20saya%20ingin%20melakukan%20konfirmasi%20telah%20melakukan%20pembayaran%0ANama :%0ANo.Tlp :%0AAlamat :%0ATerimakasih"
                        class="w-10 btn btn-success btn-lg mt-3" target="blank"> <i class="fab fa-whatsapp"></i>
                        Whatsapp </a>
                    {{-- <button class="w-100 btn btn-primary btn-lg mt-3" type="submit">kembali</button> --}}

                </div>
            </div>
        </main>

        @include('user/footer')
    </div>
</body>


</html>
