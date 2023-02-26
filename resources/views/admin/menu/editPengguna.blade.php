@extends('admin/panel')
{{-- @include ('app') --}}
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
                                <h3 class="card-title">Edit Pengguna</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="/admin/menu/{{ $pengguna->id }}" method="POST">
                                @method('put')
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Lengkap</label>
                                        <input type="text" name="nama" class="form-control" id="email"
                                            value="{{ $pengguna->nama }}" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">No.Hanphone (Wa)</label>
                                        <input type="text" name="phone" class="form-control" id="no_hp"
                                            value="{{ $pengguna->phone }}" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Alamat</label>
                                        <textarea class="form-control" name="alamat" id="" cols="30" rows="5">{{ $pengguna->alamat }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Paket</label>
                                        <select name="paket" id="" class="form-control">
                                            <option value="">Pilih Paket Internet</option>
                                            <option value="Silver" @if ($pengguna->paket == 'Silver') selected @endif>Silver
                                            </option>
                                            <option value="Gold" @if ($pengguna->paket == 'Gold') selected @endif>Gold
                                            </option>
                                            <option value="Diamond" @if ($pengguna->paket == 'Diamond') selected @endif>
                                                Diamond
                                            </option>
                                        </select>
                                        {{-- <label for="exampleInputPassword1">Paket</label>
                                        <input type="text" name="paket" class="form-control" id="paket"
                                            placeholder="" value="{{ $pengguna->paket }}"> --}}
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
                                        Lakukan Pengeditan data ketika perlu dilakukan perubahan, seperti pengguna ingin
                                        merubah paket langganannya dari paket <strong>Silver</strong> menjadi paket
                                        <strong>Gold</strong> atau <strong>Diamond</strong>, pengguna ingin memindahkan
                                        perangkat internet dilain alamat atau ingin mengganti nama yang berlangganan.
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
