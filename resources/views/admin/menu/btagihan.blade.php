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
                                <form action="">
                                    <div class="mb-3 row p-0 mx-2">

                                        <label for="caritanggal" class="col-sm-2 col-form-label">Bulan
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control col-sm-3" id="caritanggal">
                                        </div>
                                    </div>
                                    <div class="mb-3 row p-0 mx-2">
                                        <label for="caritanggal" class="col-sm-2 col-form-label">Tahun
                                        </label>
                                        <div class="col-sm-10 row">
                                            <input type="text" class="form-control col-sm-3 m-2" id="caritanggal">
                                            <a href="#"><button type="button" class="btn btn-info m-2">Buat
                                                    Tagihan</button></a>
                                            <a href="/LihatTagihan"><button type="button" class="btn btn-success m-2">Lihat
                                                    Tagihan</button></a>
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
                                            @foreach ($pengguna as $p)
                                                <tr>
                                                    <td>
                                                        {{ $loop->iteration }}
                                                    </td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input disabled type="text" class="form-control"
                                                                    placeholder="" value="{{ $p->id }}"
                                                                    aria-label="ID pengguna">
                                                            </div>
                                                    </td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input disabled type="text" class="form-control"
                                                                    placeholder="" value="{{ $p->nama }}"
                                                                    aria-label="Nama">
                                                            </div>
                                                    </td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input disabled type="text" class="form-control"
                                                                    placeholder="" value="{{ $p->paket }}"
                                                                    aria-label="Paket">
                                                            </div>
                                                    </td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col">
                                                                <select name="paket" id="" class="form-control">
                                                                    <option value="">Pilih Tagihan</option>
                                                                    <option value="150000">Rp. 150,000
                                                                    </option>
                                                                    <option value="180000">Rp. 180,000
                                                                    </option>
                                                                    <option value="220000">Rp. 220,000
                                                                    </option>
                                                                </select>
                                                                {{-- <input type="text" class="form-control" placeholder=""
                                                                value="" aria-label="Tagihan"> --}}
                                                            </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                    <div class="col-12">
                                        <div class="card">
                                            {{-- <div class="card-footer"> --}}
                                            {{-- <h3 class="card-title">Responsive Hover Table</h3>      --}}
                                            {{-- <div class="btn-group">
                                                <a href="#"><button type="button"
                                                        class="btn btn-warning">Batal</button></a>
                                            </div>
                                            <div class="btn-group">
                                                <a href="/tagihan"><button type="button" class="btn btn-info">Buat
                                                        Tagihan</button></a>
                                            </div> --}}

                                        </div>
                                    </div>
                                </form>
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
