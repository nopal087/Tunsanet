@extends('admin/panel')
{{-- @include ('app') --}}
@section('content')
    {{-- {{ json_encode($data) }} --}}
    <div class="content-wrapper">
        {{-- <p class="ml-4">Tanggal sekarang :<b> {{ $tanggal_sekarang }}</b></p> --}}


        <section class="content p-3">
            <div class="accordion mb-3" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapsetable" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseOne">
                            <strong>Data Transaksi Terbaru | Tanggal sekarang :<b> {{ $tanggal_sekarang }}</b></strong>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapsetable" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-wrap mb-3" border="2" id="myTable">
                                        <thead>
                                            {{-- <div class="text-center" id="transaksi">
                                            <h4>Tabel Pembelian Paket Internet</h4>
                                        </div> --}}
                                            <tr class="bg-primary">
                                                <th>No.</th>
                                                <th>Tanggal</th>
                                                <th>Nama</th>
                                                <th>no_hp</th>
                                                <th>Alamat</th>
                                                <th>Paket</th>
                                                <th>Jumlah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($order as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        {{ $item->updated_at->translatedFormat('d F Y') }}
                                                    </td>
                                                    <td>
                                                        {{ $item->nama }}
                                                    </td>
                                                    <td>
                                                        {{ $item->phone }}
                                                    </td>
                                                    <td>
                                                        {{ $item->alamat }}
                                                    </td>
                                                    <td>
                                                        {{ $item->paket }}
                                                    </td>
                                                    <td>
                                                        Rp. {{ number_format($item->total_price) }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                {{-- {{ $order->links() }} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Tambah Pengguna</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="/admin/menu/store" method="POST">
                                @csrf

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Lengkap</label>
                                        <input type="text" name="nama" class="form-control" id="email"
                                            placeholder="Masukkan Nama lengkap" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">No.Hanphone (Wa)</label>
                                        <input type="text" name="phone" class="form-control" id="no_hp"
                                            value="" placeholder="example 6285712666154" pattern="^62\d{11,}$"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Alamat</label>
                                        <textarea class="form-control" name="alamat" id="" cols="30" rows="5"
                                            placeholder="Masukkan alamat lengkap" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Paket</label>
                                        <select name="paket" id="" class="form-control" required>
                                            <option value="">Pilih Paket Internet</option>
                                            <option value="Silver">Silver</option>
                                            <option value="Gold">Gold</option>
                                            <option value="Diamond">Diamond</option>
                                        </select>
                                        {{-- <label for="exampleInputPassword1">Paket</label>
                                        <input type="text" name="paket" class="form-control" id="paket"
                                            placeholder=""> --}}
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="/Lpengguna" class="btn btn-danger">Batal</a>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- right column -->
                    <div class="col-md-6">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        <strong>Petunjuk Penggunaan</strong>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <strong>Tambah Pengguna Baru</strong>, dilakukan ketika pengguna sudah melakukan
                                        pembayaran baik secara Cashless maupun secara manual, dan sudah dilakukan
                                        pemasangan
                                        jaringan internet <strong>Tunsanet</strong> pada tempat tinggal pengguna. Maka
                                        secara otomatis pengguna tersebut termasuk kedalamam pengguna berlangganan,
                                        sehingga
                                        pengguna sudah dapat ditambahkan sebagai pengguna berlangganan. <br>
                                        <hr>
                                        <strong>Tambah Pengguna Lama</strong>, Bagi pengguna lama yang sudah membeli
                                        paket
                                        internet sebelum adanya sistem ini, maka pengguna tersebut wajib ditambahkan
                                        sesuai
                                        data yang sudah ada.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseTwo">
                                        <strong> Nama Lengkap</strong>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingTwo">
                                    <div class="accordion-body">
                                        <strong>Nama Lengkap</strong>, Tuliskan Nama lengkap pengguna sesuai dengan
                                        transaksi yang tertera, ketika pengguna melakukan transaksi melalui cashles maka
                                        tuliskan data sesuai dengan transaksi yang tertera pada menu <strong>Data
                                            Transaksi</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseThree">
                                        <strong>No Telephone</strong>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingThree">
                                    <div class="accordion-body">
                                        <strong>No.Telephone</strong> awali nomor telephone dengan <strong>62</strong>,
                                        digunakan untuk kode
                                        negara indonesia agar dapat digunakan untuk mengirim tagihan melalui whatapps
                                        , Masukkan nomor telephone yang terdaftar sebagai
                                        Whatsapp karena nantinya nomer ini akan digunakan untuk mengirim tagihan kepada
                                        pengguna
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseFour">
                                        <strong>Alamat</strong>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingFour">
                                    <div class="accordion-body">
                                        <strong>Alamat</strong>, Isi alamat sesuai dengan data yang tertera.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingfive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapsefive" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapsefive">
                                        <strong>Paket</strong>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapsefive" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingfive">
                                    <div class="accordion-body">
                                        <strong>Paket</strong>, Pilih Paket yang digunakan pengguna saat pengguna
                                        melakukan
                                        transaksi/pembelian.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

    </div>
@endsection
