@extends('admin/panel')
@section('content')
    {{-- {{ json_encode($data) }} --}}
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        {{-- <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Pengguna</h1>
                    </div>
                </div>
            </div>
        </section> --}}

        <section class="content p-3">
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
                                            placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">No.Hanphone (Wa)</label>
                                        <input type="text" name="phone" class="form-control" id="no_hp"
                                            placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Alamat</label>
                                        <textarea class="form-control" name="alamat" id="" cols="30" rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Paket</label>
                                        <select name="paket" id="" class="form-control">
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
                                </div>
                            </form>
                        </div>
        </section>

    </div>
@endsection
