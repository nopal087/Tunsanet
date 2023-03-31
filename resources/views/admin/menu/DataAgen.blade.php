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
        <div class="card">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-4">
                        <div class="col-sm-6">
                            <h1> Data Agen</h1>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
                <div class="row m-2">
                    <div class="col-12">
                        <form action="{{ route('DataAgen') }}" method="GET">
                            <div class="form-group borderd">
                                <label for="filter">Filter Status :</label>
                                <select name="filter" id="filter" class="form-control" onchange="this.form.submit()">
                                    <option value="all" {{ $filter == 'all' ? 'selected' : '' }}>Semua</option>
                                    <option value="Tidak Aktif" {{ $filter == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif
                                    </option>
                                    <option value="Aktif" {{ $filter == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">

                        <div class="card-header p-0 mx-3">

                            <a class="btn btn-primary btn-md" href="/admin/menu/TambahAgen"><i class="fas fa-user-edit">
                                </i> Tambah Agen</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-bordered-responsive p-0 mx-3 mt-3">
                            {{-- @if (count($datapengguna) > 0) --}}
                            <table class=" table-bordered text-wrap mb-3 stripe hover" border="2" id="myTable">
                                <thead>
                                    <tr class="bg-secondary">
                                        <th>No.</th>
                                        {{-- <th>ID</th> --}}
                                        <th>Tanggal Ajuan</th>
                                        <th>Nama</th>
                                        <th>No.Telp</th>
                                        <th>Alamat</th>
                                        <th>Status Agen</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($agen as $ag)
                                        <tr>
                                            <td class="border">{{ $loop->iteration }}</td>
                                            {{-- <td class="border">{{ $ag->id }}</td> --}}
                                            <td class="border">{{ $ag->updated_at->translatedFormat('d F Y, H:i:s') }}</td>
                                            <td class="border">{{ $ag->nama }}</td>
                                            <td class="border">{{ $ag->phone }}</td>
                                            <td class="border">{{ $ag->alamat }}</td>
                                            <td class="border"><label
                                                    class="badge {{ $ag->status == 'Aktif' ? 'badge-success' : 'badge-danger' }}">{{ $ag->status == 'Aktif' ? 'Aktif' : 'Tidak Aktif' }}</label>
                                            </td>
                                            <td class="project-actions border">
                                                <a class="btn btn-success btn-sm"
                                                    href="/admin/manual/status/lunas/{{ $ag->id }}">
                                                    <i class="fas fa-check"></i>
                                                    </i>
                                                </a>
                                                <a class="btn btn-info btn-sm"
                                                    href="admin/menu/{{ $ag->id }}/editAgen">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                </a>
                                                <a class="btn btn-success btn-sm" target="_blank"
                                                    href="https://wa.me/{{ $ag->phone }}?text=Terimakasih%20telah%20melakukan%20pendaftaran%20agen,%20ajuan%20anda%20sudah%20kami%20setujui,%20kami%20akan%20segera%20melakukan%20pemasangan%20dirumah%20anda,%20jika%20ada%20yang%20ingin%20ditanyakan%20bisa%20balas%20chat%20ini,%20terimakasih%20">
                                                    <i class="fab fa-whatsapp"></i>
                                                    </i>
                                                </a>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <form action="/admin/menu/Agen/{{ $ag->id }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="button" class="btn btn-danger btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#confirm-delete-{{ $ag->id }}"><i
                                                                class="fas fa-trash"></i></button>
                                                        <div class="modal fade" id="confirm-delete-{{ $ag->id }}"
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
                                                                        Apakah Anda yakin ingin menghapus data ini?
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
