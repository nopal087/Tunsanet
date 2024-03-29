@extends('admin/panel')
{{-- @include ('app') --}}
@section('content')
    {{-- {{ json_encode($data) }} --}}
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Daftar Pengguna Registrasi</h1>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <div class="row">
                <div class="col-12">
                    {{-- <div class="card-header">
                        <form action="{{ route('pengguna') }}" method="GET">
                            <div class="mx-auto">
                                <label for="filter">Cari :</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="search-input"
                                        placeholder="ketikan disini..." name="cari" value="{{ $request->cari }}">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-primary" id="search-button">Cari</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> --}}
                    <!-- /.card-header -->
                    <div class="card mt-2">
                        <div class="card-body table-bordered-responsive p-0 mx-3 mt-3">
                            <div class="table-responsive">
                                <table class=" table-bordered text-wrap mb-3 hover stripe" border="2" id="myTable">
                                    <thead>
                                        <tr class="bg-secondary">
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
                                        @foreach ($user as $item)
                                            <tr>
                                                <td class="border">{{ $loop->iteration }}.</td>
                                                <td class="border">{{ $item->id }}</td>
                                                <td class="border">{{ $item->name }}</td>
                                                <td class="border">{{ $item->email }}</td>
                                                <td class="border">{{ $item->no_hp }}</td>
                                                <td class="border">{{ $item->alamat }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @if (isset($status))
                                <div class="alert alert-danger text-center">{{ $status }}</div>
                                <div class="text-center">
                                    <img src="{{ $gambar }}" width="50%" alt="no data">
                                </div>
                            @else
                            @endif
                        </div>

                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
    </div>
    </section>
    </div>
@endsection
