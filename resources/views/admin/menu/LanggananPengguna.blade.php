@extends('admin/panel')
@section('content')
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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="search" class="form-control float-left"
                                        placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-primary btn-sm" href="/admin/menu/Tambahpengguna"><i class="fas fa-user-edit">
                                    Pengguna</i></a>
                            <a class="btn btn-primary btn-sm" href="/btagihan"><i class="fas fa-edit"> Tagihan
                                </i></a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-bordered text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>ID</th>
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
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $p->id }}</td>
                                            <td>{{ $p->nama }}</td>
                                            {{-- <td>nopal@gmail.com</td> --}}
                                            <td>{{ $p->phone }}</td>
                                            <td>{{ $p->alamat }}</td>
                                            <td>{{ $p->paket }}</td>
                                            <td class="project-actions">
                                                <a class="btn btn-info btn-sm" href="admin/menu/{{ $p->id }}/edit">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                </a>
                                                <div class="btn-group" role="group" aria-label="Basic example">

                                                    <form action="/admin/menu/{{ $p->id }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <input class="btn btn-danger btn-sm" type="submit" value="delete">
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
                    <div class="">
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </section>
    </div>
@endsection
