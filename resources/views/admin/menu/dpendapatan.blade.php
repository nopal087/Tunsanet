@extends('admin/panel')
@include ('app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Pendapatan</h1>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <h4>Input pendapatan</h4>
                            <tr>
                                <th>No.</th>
                                <th>Bulan/Tanggal/Tahun</th>
                                <th>Jumlah pendapatan (Rp)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <input type="date" class="form-control">
                                </td>
                                <td>
                                    <div>
                                        <input type="text" class="form-control" id="dengan-rupiah">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- button submit --}}
                    <div class="btn-group row mt-3 col sm-2">
                        <a href="#"><button type="button" class="btn btn-info mb-3">Submit</button></a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <h4>Table pendapatan</h4>
                            <tr>
                                <th>No.</th>
                                <th>Bulan/Tanggal/Tahun</th>
                                <th>Jumlah pendapatan (Rp)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    12/16/2022
                                </td>
                                <td>
                                    Rp. 150.000
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>
                                    12/16/2022
                                </td>
                                <td>
                                    Rp. 150.000
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>
                                    12/16/2022
                                </td>
                                <td>
                                    Rp. 150.000
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>
                                    12/16/2022
                                </td>
                                <td>
                                    Rp. 150.000
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>
                                    12/16/2022
                                </td>
                                <td>
                                    Rp. 150.000
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>
                                    12/16/2022
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
