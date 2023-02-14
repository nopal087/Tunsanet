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
                            {{-- <div class="mb-3 row  mx-2">
                                <label for="caritanggal" class="col-sm-2 col-form-label">Bulan
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control col-sm-3" id="caritanggal">
                                </div>
                            </div> --}}
                            <tr>
                                <th>No.</th>
                                <th>Bulan/Tanggal/Tahun</th>
                                <th>Nama</th>
                                <th>Paket</th>
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
