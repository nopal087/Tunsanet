<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agen</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/pricing/" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@200;400&family=Pacifico&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    @include ('app')
</head>

<body>
    <!-- Navbar -->
    @include('user/navbar')
    <!-- Navbar -->
    <div class="m-3 py-5">


        <div class="container">
            <div class="paket-h1 mt-4">
                <h4 class="text-center mb-5"><strong>Dengan menjadi Agen Anda akan mendapatkan :</strong></h4>
            </div>
            <div align="justify">
                <div class="m-3 py-1">
                    <p class="justify">Tentunya, jika Anda bergabung sebagai penyedia paket internet rumahan bersama
                        kami,
                        Anda akan
                        mendapatkan manfaat yang sangat menarik. Selain dukungan penuh dan bantuan teknis dalam
                        membangun jaringan internet Anda sendiri, berikut adalah beberapa manfaat lain yang akan
                        Anda
                        dapatkan:
                    <ul>
                        <li> Penghasilan yang Menjanjikan: Anda akan memiliki kesempatan untuk menghasilkan
                            penghasilan
                            yang
                            lebih tinggi dengan menjual paket internet rumahan yang berkualitas dan terjangkau
                            kepada
                            pelanggan Anda.</li>

                        <li> Jaringan Pelanggan yang Berkembang: Kami akan membantu Anda memperluas jaringan
                            pelanggan
                            Anda
                            dengan memperkenalkan produk dan layanan Anda kepada masyarakat yang membutuhkan.</li>

                        <li> Kebebasan Waktu: Anda akan memiliki fleksibilitas untuk mengatur jadwal kerja Anda
                            sendiri,
                            sehingga Anda dapat menyesuaikan pekerjaan dengan kebutuhan Anda sehari-hari.</li>

                        <li> Pendidikan dan Pelatihan: Kami akan memberikan pelatihan dan dukungan penuh untuk
                            membantu
                            Anda
                            memulai dan mengembangkan bisnis Anda.</li>
                    </ul>
                    Jadi, tunggu apalagi? Bergabunglah bersama kami sekarang dan nikmati manfaat dari menjadi
                    penyedia paket internet rumahan yang sukses!</p>
                </div>
            </div>
            <div class="m-3 py-1" align="justify">
                <p>Selain manfaat yang telah disebutkan sebelumnya, sebagai penyedia paket internet rumahan yang
                    bergabung dengan kami, Anda juga akan mendapatkan perangkat teknologi terbaru yang
                    akan membantu Anda dalam mengembangkan bisnis Anda. Beberapa perangkat tersebut antara lain: </p>
            </div>
            <section id="kelebihan" class="rounded-9 m-3 py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-lg-6">
                            <div class="card mb-4 rounded-9 shadow-md">
                                <div class="card-body d-flex">
                                    <img src="{{ asset('pengguna/img/Router.jpg') }}" width="50%" alt="">
                                    <div>
                                        <h4 class="card-title">Router</h4>
                                        <p class="card-text"> Kami akan memberikan perangkat router yang
                                            berkualitas dan terpercaya untuk memastikan jaringan internet yang stabil
                                            dan cepat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-lg-6">
                            <div class="card mb-4 rounded-9 shadow-md">
                                <div class="card-body d-flex">
                                    {{-- <img class="mr-4" src="{{ asset('pengguna/img/2.png') }}" width="50%"
                                alt="Kecepatan Tinggi"> --}}
                                    <img src="{{ asset('pengguna/img/pemasangan.png') }}" width="50%" alt="">
                                    <div>
                                        <h4 class="card-title">Perangkat Pendukung</h4>
                                        <p class="card-text">Kami akan memberikan perangkat pendukung
                                            yang diperlukan untuk membangun
                                            jaringan internet yang kuat dan stabil dan melakukan pemasangan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="mt-4  text-center">
                        <h2>Daftar Sekarang</h2>
                    </div>
                    <form action="" method="POST">

                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama...">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">No Hanphone</label>
                            <input type="text" class="form-control" id="phone" placeholder="628579999912">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat Lengkap</label>
                            <textarea class="form-control" id="alamat" rows="3"></textarea>
                        </div>
                        @auth
                            <button type="submit" class="btn btn-primary">Ajukan</button>
                        @endauth
                        @guest
                            <a href="/login" class="btn btn-primary">Ajukan</a>
                        @endguest
                    </form>
                    <div class="mt-3" align="justify">
                        <p>jika ada yang ingin ditanyakan sebelum mendaftar anda dapat bertanya pada bubble chat pada
                            pojok kanan bawah!.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 justify-content-end mb-4">
                    <img src="{{ asset('pengguna/img/joinus.png') }}" width="90%" alt="gambar FAQ" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    @include('user/footer')
    @include('user/chat_bubble')
</body>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>

</html>
