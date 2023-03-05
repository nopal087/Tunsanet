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

    <title>WIFI | Detail Pesanan</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/pricing/" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="{{ asset('pengguna/css/bootstrap.min.css') }}" rel="stylesheet" />

    {{-- toats bootsrtap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Load JavaScript Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
    <!-- Load JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

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
                    <h1 class="display-8 fw-normal">Detail Order</h1>
                    <p class="fs-5 text-muted">
                        Internet Cepat dan ngebut dengan Layanan Wifi TUNSANET!
                    </p>
                </div>
                <div class="row g-2 mb-3">
                    <div class="col-md-5 col-lg-4 order-md-last p-3 h-25">
                        <h4 class="d-flex justify-content-between align-items-center mb-1">
                            <span class="">Paket Internet</span>
                        </h4>
                        <h6><small class="text-muted">Detail Paket !</small></h6>
                        <form class="needs-validation mt-4" action="/checkout" method="POST">
                            @csrf
                            <ul class="list-group mt-3">
                                <li class="list-group-item d-flex justify-content-between lh-lg">
                                    <div>
                                        <h6 class="my-0">Paket Internet</h6>
                                        <small class="text-muted">{{ $order->paket }}</small>
                                    </div>
                                    <span class="text-muted">Rp.{{ number_format($order->total_price) }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Total</span>
                                    <strong>Rp.{{ number_format($order->total_price) }} </strong>
                                </li>
                                <img src="{{ asset('pengguna/img/E-Wallet.png') }}" width="100%" class="img-fluid"
                                    alt="pay">
                            </ul>
                            {{-- data diri pengguna/pembeli --}}
                    </div>
                    <div class="col-md-7 col-lg-8">
                        <div class="p-3">
                            <h4 class="mb-3 m-2">Detail Pembeli</h4>
                            {{-- <h6><small class="text-muted">Silahkan isi data diri anda dengan lengkap !</small></h6> --}}
                            <form class="needs-validation mt-4" action="" method="">
                                <div class="p-3">
                                    <div class="row g-3">
                                        <ul class="list-group mt-3">
                                            <li class="list-group-item d-flex justify-content-between lh-lg">
                                                <div>
                                                    <h6 class="my-0">Nama :</h6>
                                                    <small class="text-muted">{{ $order->nama }}</small>
                                                </div>

                                            </li>
                                            <li class="list-group-item d-flex justify-content-between lh-md">
                                                <div>
                                                    <h6 class="my-0">No. Telephone</h6>
                                                    <small class="text-muted">{{ $order->phone }}</small>
                                                </div>

                                            </li>
                                            <li class="list-group-item d-flex justify-content-between lh-md">
                                                <div>
                                                    <h6 class="my-0">Alamat</h6>
                                                    <small class="text-muted">{{ $order->alamat }}</small>
                                                </div>

                                            </li>
                                        </ul>

                                    </div>
                                </div>
                        </div>
                        </form>
                        <div class="d-flex">
                            <div class="row p-3">
                                <button class="w-100 btn btn-primary btn-lg mt-3" id="pay-button" type="submit">Bayar
                                    Sekarang</button>
                            </div>
                            <div class="row p-3">
                                <a class="btn btn-success btn-lg mt-3" target="_blank"
                                    href="https://wa.me/6285712666154?text=Halo%20petugas%20Bumdes%20saya%20ingin%20melakukan%20pembayaran%20untuk%20paket%20internet%20wifi%20yang%20saya%20beli%20atas%0ANama :%0ANo. hp:%0AAlamat :%0APaket Internet :%0Atolong segera dilakukan pemasangan dirumah saya terimakasih%20">
                                    <i class="fab fa-whatsapp"></i> Hubungi Petugas
                                </a>
                            </div>

                        </div>
                        <i>*Tombol Bayar sekarang digunakan ketika ingin melakukan pembayaran secara cashless
                            atau dengan
                            transfer</i> <br>
                        <i>*Tombol hubungi petugas digunakan ketika ingin melakukan pembayaran secara manual</i>
                    </div>
                </div>
            </div>
        </main>

        {{-- <footer class="pt-4 my-md-5 pt-md-5 border-top">
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
            </div>
        </footer> --}}
    </div>
    @include('user/footer')
    @include('user/Notif_info')

    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    /* You may add your own implementation here */
                    // alert("payment success!");
                    window.location.href = 'transaksi.invoice/{{ $order->id }}'
                    console.log(result);
                },
                onPending: function(result) {
                    /* You may add your own implementation here */
                    alert("wating your payment!");
                    console.log(result);
                },
                onError: function(result) {
                    /* You may add your own implementation here */
                    alert("payment failed!");
                    console.log(result);
                },
                onClose: function() {
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            })
        });

        var myToast = document.querySelector('.toast');
        var bsToast = new bootstrap.Toast(myToast);
        bsToast.show();
    </script>
</body>

</html>
