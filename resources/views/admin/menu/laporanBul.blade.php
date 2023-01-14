@extends('admin/panel')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Laporan Bulanan</h1>
                    </div>
                </div>
            </div>

            {{-- table --}}
            <div class="card">
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            {{-- cari tanggal --}}
                            <div class="mb-3 row">
                                <label for="caritanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-10 row gx-5 d-flex align-items-center">
                                    <input type="date" class="form-control col-sm-3" id="caritanggal">
                                    <i class="fas fa-minus mx-2"></i>
                                    <input type="date" class="form-control col-sm-3" id="caritanggal">
                                </div>
                            </div>
                            {{-- cari jumlah --}}
                            <div class="mb-3 row">
                                <label for="carijumlah" class="col-sm-2 col-form-label">Jumlah</label>
                                <div class="col-sm-10 row gx-5 d-flex align-items-center">
                                    <input type="text" class="form-control col-sm-3" id="dengan-rupiah">
                                    <i class="fas fa-minus mx-2 "></i>
                                    <input type="text" class="form-control col-sm-3" id="dengan-rupiah1">
                                    <a href="#" class="col-sm-2"><button type="button"
                                            class="btn btn-info ">Cari</button></a>
                                </div>
                            </div>
                            {{-- <div class="mb-3 row">
                                <a href="#" class="col-sm-10 offset-sm-2 row"><button type="button"
                                        class="btn btn-info col-sm-3">Cari</button></a>
                            </div> --}}
                            {{-- enter cari --}}
                            <tr>
                                <th>No.</th>
                                <th>Bulan/Tanggal/Tahun</th>
                                <th>Nama</th>
                                <th>jenis Paket</th>
                                <th>Jumlah Pembayaran (Rp)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    12/16/2022
                                </td>
                                <td>
                                    Muhammad
                                </td>
                                <td>
                                    silver
                                </td>
                                <td>
                                    Rp. 150.000
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    <script>
        var dengan_rupiah = document.getElementById('dengan-rupiah');
        dengan_rupiah.addEventListener('keyup', function(e) {
            dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
        });

        var dengan_rupiah1 = document.getElementById('dengan-rupiah1');
        dengan_rupiah1.addEventListener('keyup', function(e) {
            dengan_rupiah1.value = formatRupiah(this.value, 'Rp. ');
        });


        /* Fungsi */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    </script>
@endsection
