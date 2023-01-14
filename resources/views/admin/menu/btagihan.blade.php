@extends('admin/panel')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Buat Tagihan Pengguna</h1>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-body table-responsive p-0">
                                <div class="mb-3 row">
                                    <label for="caritanggal" class="col-sm-2 col-form-label">Masukkan Tanggal
                                        Tagihan</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control col-sm-3" id="caritanggal">
                                    </div>
                                </div>
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>ID Pengguna</th>
                                            <th>Nama</th>
                                            <th>Paket</th>
                                            <th>Tagihan (Rp)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                1.
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col">
                                                        <input type="text" class="form-control" placeholder="123"
                                                            aria-label="ID pengguna">
                                                    </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col">
                                                        <input type="text" class="form-control"
                                                            placeholder="Muhammad Naufal Faruq" aria-label="Nama">
                                                    </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col">
                                                        <input type="text" class="form-control" placeholder="Silver"
                                                            aria-label="Paket">
                                                    </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col">
                                                        <input type="text" class="form-control" placeholder="Rp.150.000"
                                                            aria-label="Tagihan">
                                                    </div>
                                            </td>
                                        </tr>

                                    </tbody>

                                </table>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-footer">
                                            {{-- <h3 class="card-title">Responsive Hover Table</h3>      --}}
                                            <div class="btn-group">
                                                <a href="#"><button type="button"
                                                        class="btn btn-warning">Batal</button></a>
                                            </div>
                                            <div class="btn-group">
                                                <a href="/tagihan"><button type="button" class="btn btn-info">Buat
                                                        Tagihan</button></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
        </section>
    </div>
@endsection
