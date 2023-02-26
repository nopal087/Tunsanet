@extends('admin/panel')
@include ('app')
@section('content')
    {{-- {{ json_encode($data) }} --}}
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Daftar Pengguna</h1>
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
                                    <input type="text" name="table_search" class="form-control float-left"
                                        placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr class="bg-primary-subtle">
                                        <th>No.</th>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>No.Telp</th>
                                        <th>Alamat</th>
                                        {{-- <th>Aksi</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}.</td>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->no_hp }}</td>
                                            <td>{{ $item->alamat }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                        <!-- /.card-body -->
                    </div>
                    <div class="">
                        {{ $data->links() }}
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </section>
    </div>
@endsection
