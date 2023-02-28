<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FAQ</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/pricing/" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@200;400&family=Pacifico&display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />
</head>

<body>

    <!-- Navbar -->
    @include('user/navbar')
    <!-- Navbar -->
    <div class="mt-4 text-center">
        <h2>FAQ</h2>
    </div>

    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-mdb-toggle="collapse"
                                data-mdb-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Apa itu Tunsanet?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-mdb-parent="#accordionExample">
                            <div class="accordion-body">
                                Tunsanet adalah Badan Usaha Milik Desa Tunjungsari yang memberikan pelayanan wifi kepada
                                warga sekitar untuk meningkatkan perekonomian desa Tunjungsari.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                                data-mdb-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Bagaimana cara melakukan pembayarannya?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-mdb-parent="#accordionExample">
                            <div class="accordion-body">
                                Jika anda melakukan pembelian melalui website ini maka akan terdapat 2 opsi
                                pembayaran<br>
                                1. pembayaran menggunakan cashless atau secara online , anda hanya tinggal mengikuti
                                intruksi yang ada untuk melakukan pembayaran, opsi pembayaran online nya juga bervariasi
                                anda dapat menentukannya sendiri. <br>
                                2. pembayaran secara manual, anda dapat datang ke kantor atau anda dapat menguhubungi
                                petugas Bumdes Tunsanet untuk melakukan pembayaran.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                                data-mdb-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Apakah setelah pembelian akan segera dilakukan pemasangan?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-mdb-parent="#accordionExample">
                            <div class="accordion-body">
                                Pemasangan akan dilakukan ketika pembeli sudah melakukan konfirmasi pembayaran kepada
                                petugas melalui whatsapp maupun secara langsung dengan menyertakan bukti pembayaran.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                                data-mdb-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Apakah kecepatan Biznet Home akan selalu konstan setiap saat?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-mdb-parent="#accordionExample">
                            <div class="accordion-body">
                                Tidak, Layanan Internet Tunsanet bersifat “sharing” dan “up-to”. Namun kecepatan dan
                                performa Internet Tunsanet dapat digunakan dengan optimal sepanjang hari.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                                data-mdb-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Apakah Tunsanet menerapkan FUP (Fair Usage Policy) pada semua paket layanan?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-mdb-parent="#accordionExample">
                            <div class="accordion-body">
                                Tidak, Tunsanet tidak menerapkan FUP pada seluruh paket layanan. Tunsanet tidak
                                memberikan layanan data dengan batas quota ataupun penurunan kecepatan pada batas quota
                                penggunaan tertentu kepada seluruh pelanggan, agar pelanggan memiliki pengalaman dalam
                                mengakses internet super cepat tanpa batas di rumah.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                                data-mdb-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Berapa lama masa aktif yang dimiliki ketika melakukan pembayaran Tagihan?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-mdb-parent="#accordionExample">
                            <div class="accordion-body">
                                Masa aktif yang kamu terima adalah 1 bulan (30 hari), dan masa tenggang 45 hari.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                                data-mdb-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Bagaimana cara melakukan pembayaran Tagihan secara virtual?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-mdb-parent="#accordionExample">
                            <div class="accordion-body">
                                Pembayaran tagihan secara virtual dapat dilakukan ketika anda sudah menerima pesan dari
                                admin yang berisi link untuk melakukan pembayaran secara virtual (E-Wallet, M-banking,
                                ATM, dan lainnya).
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 justify-content-end mb-4">
                <img src="{{ asset('pengguna/img/FAQ.png') }}" width="90%" alt="gambar FAQ" class="img-fluid">
            </div>
        </div>
    </div>

    @include('user/footer')
</body>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>

</html>
