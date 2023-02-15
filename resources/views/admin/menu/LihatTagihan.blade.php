@extends('admin/panel')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2 justify-content-between">
                    <div class="col-sm-6">
                        <h1>Data Tagihan</h1>
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
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>ID</th>
                                        <th>Tanggal Tagihan</th>
                                        <th>Nama</th>
                                        <th>No.hp</th>
                                        <th>Paket</th>
                                        <th>Jumlah</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tagihan as $t)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $t->id_pengguna }}</td>
                                            <td>{{ $t->tanggal }}</td>
                                            <td>{{ $t->nama }}</td>
                                            <td>{{ $t->phone }}</td>
                                            <td>{{ $t->paket }}</td>
                                            <td>Rp. {{ number_format($t->tagihan) }}</td>
                                            <td><label
                                                    class="badge {{ $t->status == 'Paid' ? 'badge-success' : 'badge-danger' }}">{{ $t->status == 'Paid' ? 'Lunas' : 'Belum Lunas' }}</label>
                                            </td>

                                            <td class="project-actions">
                                                <a class="btn btn-info btn-sm" href="/admin/menu/Lunas/{{ $t->id }}">
                                                    <i class="fas fa-check"></i>
                                                    </i>
                                                </a>
                                                <a class="btn btn-success btn-sm" target="_blank"
                                                    href="https://wa.me/{{ $t->phone }}?text=kepada%20yang%20terhormat%20bapak/ibu,%20internet%20wifi%20anda%20dalam%20masa%20tagihan,%20silahkan%20lakukan%20pembayaran%20internet%20wifi%20anda%20melalui%20link%20berikut%20(link),%20atau%20anda%20dapat%20melakukan%20pembayaran%20secara%20manual%20kepada%20petugas%20bumdes%20desa%20Tunjungsari,%20Terimakasih,%20%20%20Pesan Ini dikirim oleh petugas BUMDES Sari Rejeki Desa Tunjungsari%20Info lebih lanjut bisa hubungi 085712666154 (nopal)">
                                                    <i class="fab fa-whatsapp"></i>
                                                    </i>
                                                </a>
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
