@extends('admin/panel')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2 justify-content-between">
                    <div class="col-sm-6">
                        <h1>Data Transaksi</h1>
                    </div>
                    <div class="card-tools">

                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-left" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        {{-- <div class="card-header row justify-content-between">
                            <button class="col-sm-6 btn btn-light active">Belum Bayar</button>
                            <button class="col-sm-6 btn btn-light">Sudah Bayar</button>
                        </div> --}}
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr class="bg-primary-subtle">
                                        <th>No.</th>
                                        <th>ID Pengguna</th>
                                        <th>Tanggal Pembayaran</th>
                                        <th>Nama</th>
                                        <th>No.Telephone</th>
                                        <th>Alamat</th>
                                        <th>Jumlah</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->updated_at->translatedFormat('d F Y, H:i:s') }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>{{ $item->alamat }}</td>
                                            <td>Rp. {{ number_format($item->total_price) }}</span></td>
                                            <td><label
                                                    class="badge {{ $item->status == 'Paid' ? 'badge-success' : 'badge-danger' }}">{{ $item->status == 'Paid' ? 'Lunas' : 'Belum Lunas' }}</label>
                                                {{-- <a class="btn btn-danger btn-sm" href="#">
                                                    Belum bayar
                                                </a> --}}
                                            </td>
                                            <td class="project-actions">
                                                <a class="btn btn-info btn-sm"
                                                    href="/admin/manual/lunas/{{ $item->id }}">
                                                    <i class="fas fa-check"></i>
                                                    </i>
                                                </a>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <form action="/admin/menu/tagihan/{{ $item->id }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="button" class="btn btn-danger btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#confirm-delete-{{ $item->id }}">Hapus</button>
                                                        <div class="modal fade" id="confirm-delete-{{ $item->id }}"
                                                            tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="myModalLabel">Konfirmasi
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
                                                        {{-- <input class="btn btn-danger btn-sm" type="button" value="delete"> --}}

                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </section>
    </div>
@endsection
