@extends('admin/panel')
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
                            {{-- <div class="btn-pengguna">
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-plus"></i>
                                    Data Pengguna
                                </a>
                            </div> --}}
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>No.Telp</th>
                                        <th>Alamat</th>
                                        {{-- <th>Paket internet</th> --}}
                                        <th>Aksi</th>
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
                                            <td class="project-actions d-flex justify-content-between align-items-center">


                                                {{-- edit --}}
                                                <!-- Button to trigger modal -->
                                                <button class="btn btn-primary btn-md" data-toggle="modal"
                                                    data-target="#modalForm">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="modalForm" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myModalLabel">Tambah Pengguna
                                                                </h4>
                                                                <button type="button" class="close" data-dismiss="modal">
                                                                    <span aria-hidden="true">&times;</span>
                                                                    <span class="sr-only">Close</span>
                                                                </button>
                                                            </div>

                                                            <!-- Modal Body -->
                                                            <div class="modal-body">
                                                                <p class="statusMsg"></p>
                                                                @foreach ($data as $edit)
                                                                    @if ($edit->id == $item->id)
                                                                        <form role="form" method="GET" action="">
                                                                            @csrf
                                                                            <div class="form-group">
                                                                                <label for="inputName">Name</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="inputName"
                                                                                    placeholder="Enter your name"
                                                                                    value="{{ $edit->name }}" />
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="inputEmail">Email</label>
                                                                                <input type="email" class="form-control"
                                                                                    id="inputEmail"
                                                                                    placeholder="Enter your email"
                                                                                    value="{{ $edit->email }}" />
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="inputEmail">No.Telephone</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="inputtelephone"
                                                                                    placeholder="Enter your email"
                                                                                    value="{{ $edit->no_hp }}" />
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="inputMessage">Alamat</label>
                                                                                <textarea class="form-control" id="inputMessage" placeholder="Enter your message">{{ $item->alamat }}</textarea>
                                                                            </div>
                                                                        </form>
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                            <!-- Modal Footer -->
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary submitBtn"
                                                                    onclick="submitContactForm()">SUBMIT</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- hapus --}}
                                                <a class="btn btn-danger btn-md" href="#">
                                                    <i class="fas fa-trash">
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
                    <div class="">
                        {{ $data->links() }}
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </section>
    </div>
@endsection
