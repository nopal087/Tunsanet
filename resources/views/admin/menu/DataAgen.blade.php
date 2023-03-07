@extends('admin/panel')
{{-- @include ('app') --}}
@section('content')
    {{-- {{ json_encode($data) }} --}}
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h1>Data Agen</h1>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('DataAgen') }}" method="GET">
                        <div class="form-group">
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
                    <div class="card">
                        <div class="card-header">

                            <a class="btn btn-primary btn-sm" href="/admin/menu/TambahAgen"><i class="fas fa-user-edit">
                                    Tambah Agen</i></a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-bordered-responsive p-0">
                            {{-- @if (count($datapengguna) > 0) --}}
                            <table class="table table-bordered text-nowrap mb-3">
                                <thead>
                                    <tr class="bg-primary-subtle">
                                        <th>No.</th>
                                        <th>ID</th>
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
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $ag->id }}</td>
                                            <td>{{ $ag->nama }}</td>
                                            <td>{{ $ag->phone }}</td>
                                            <td>{{ $ag->alamat }}</td>
                                            <td><label
                                                    class="badge {{ $ag->status == 'Aktif' ? 'badge-success' : 'badge-danger' }}">{{ $ag->status == 'Aktif' ? 'Aktif' : 'Tidak Aktif' }}</label>
                                            </td>
                                            <td class="project-actions">
                                                <a class="btn btn-info btn-sm"
                                                    href="/admin/manual/lunas/{{ $ag->id }}">
                                                    <i class="fas fa-check"></i>
                                                    </i>
                                                </a>
                                                <a class="btn btn-info btn-sm"
                                                    href="admin/menu/{{ $ag->id }}/editAgen">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                </a>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <form action="/admin/menu/Agen/{{ $ag->id }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="button" class="btn btn-danger btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#confirm-delete-{{ $ag->id }}">Hapus</button>
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
