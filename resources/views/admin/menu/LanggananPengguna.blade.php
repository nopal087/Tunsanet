@extends('admin/panel')
{{-- @include ('app') --}}
@section('content')
    <style>
        td {
            max-width: 200px;
            /* ukuran maksimum kolom tabel */
            word-wrap: break-word;
            /* memastikan teks panjang tidak melebar */
        }
    </style>
    {{-- {{ json_encode($data) }} --}}
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Pengguna Berlangganan</h1>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <form action="{{ route('Lpengguna') }}" method="GET">
                <div class="p-3 row">
                    <div class="input-group">
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="ketikan disini..." name="cari" value="{{ $request->cari }}">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">Cari</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header mb-2">

                            <a class="btn btn-primary btn-sm" href="/admin/menu/Tambahpengguna"><i class="fas fa-user-edit">
                                </i> Tambah Pengguna</a>
                            <a class="btn btn-primary btn-sm" href="/btagihan"><i class="fas fa-edit">
                                </i> Buat Tagihan</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-bordered-responsive p-0 mx-3">
                            @if (count($datapengguna) > 0)
                                <table class="table table-bordered text-wrap mb-3 hover stripe" id="myTable">
                                    <thead>
                                        <tr class="bg-secondary">
                                            <th>No.</th>
                                            {{-- <th>ID</th> --}}
                                            <th>Nama</th>
                                            {{-- <th>Email</th> --}}
                                            <th>No.Telp</th>
                                            <th>Alamat</th>
                                            <th>Paket internet</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pengguna as $p)
                                            <tr>
                                                <td class="border">{{ $loop->iteration }}</td>
                                                {{-- <td class="border">{{ $p->id }}</td> --}}
                                                <td class="border">{{ $p->nama }}</td>
                                                {{-- <td class="border">nopal@gmail.com</td> --}}
                                                <td class="border">{{ $p->phone }}</td>
                                                <td class="border">{{ $p->alamat }}</td>
                                                <td class="border">{{ $p->paket }}</td>
                                                <td class="project-actions border">
                                                    <a class="btn btn-info btn-sm"
                                                        href="admin/menu/pengguna/{{ $p->id }}/edit">
                                                        <i class="fas fa-pencil-alt">
                                                        </i>
                                                    </a>
                                                    <div class="btn-group" role="group" aria-label="Basic example">

                                                        <form action="/admin/menu/pengguna/{{ $p->id }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            {{-- Modal Button Hapus --}}
                                                            {{-- <input class="btn btn-danger btn-sm" type="submit"
                                                            data-toggle="modal"> --}}
                                                            <button type="button" class="btn btn-danger btn-sm"
                                                                data-toggle="modal"
                                                                data-target="#pengguna-{{ $p->id }}"><i
                                                                    class="fas fa-trash"></i></button>
                                                            <div class="modal fade" id="pengguna-{{ $p->id }}"
                                                                tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title" id="myModalLabel">
                                                                                Konfirmasi
                                                                                Penghapusan</h4>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal"
                                                                                aria-hidden="true">&times;</button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            Apakah Anda yakin ingin menghapus ini?
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-default"
                                                                                data-dismiss="modal">Batal</button>
                                                                            <button type="submit"
                                                                                class="btn btn-danger">Hapus</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- <input class="btn btn-danger btn-sm" type="submit" value="delete"> --}}
                                                        </form>
                                                    </div>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{-- menampilkan pencarian ketika tidak ditemukan --}}
                                @if (isset($status))
                                    <div class="alert alert-danger text-center">{{ $status }}</div>
                                    <div class="text-center">
                                        <img src="{{ $gambar }}" width="50%" alt="no data">
                                    </div>
                                @else
                                    <!-- Tampilkan tabel data pengguna -->
                                @endif

                                {{-- menampilkan ketika data kosong --}}
                            @else
                                <div class="text-center">
                                    <img src="{{ asset('pengguna/img/empty.jpg') }}" alt="No Data Found" width="50%">
                                    <p>Tidak ada data yang tersedia.</p>
                                </div>
                            @endif

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="">
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </section>
    </div>
@endsection
