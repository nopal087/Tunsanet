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

                            <!-- Button to trigger modal -->
                            <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#modalForm">
                                <i class="fas fa-plus"> Tambah Pengguna
                                </i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modalForm" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span aria-hidden="true">&times;</span>
                                                <span class="sr-only">Close</span>
                                            </button>
                                            <h4 class="modal-title" id="myModalLabel">Tambah Pengguna</h4>
                                        </div>

                                        <!-- Modal Body -->
                                        <div class="modal-body">
                                            <p class="statusMsg"></p>
                                            <form role="form">
                                                <div class="form-group">
                                                    <label for="inputName">Name</label>
                                                    <input type="text" class="form-control" id="inputName"
                                                        placeholder="Enter your name" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail">Email</label>
                                                    <input type="email" class="form-control" id="inputEmail"
                                                        placeholder="Enter your email" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail">No.Telephone</label>
                                                    <input type="text" class="form-control" id="inputtelephone"
                                                        placeholder="Enter your email" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputMessage">Alamat</label>
                                                    <textarea class="form-control" id="inputMessage" placeholder="Enter your message"></textarea>
                                                </div>
                                            </form>
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



                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-bordered text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>No.Telp</th>
                                        <th>Alamat</th>
                                        <th>Paket internet</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>Nopal</td>
                                        <td>nopal@gmail.com</td>
                                        <td>085712666154</td>
                                        <td>Tunjungsari RT07 RW02</td>
                                        <td>Silver</td>
                                        <td class="project-actions">
                                            <a class="btn btn-info btn-sm" href="#">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="#">
                                                <i class="fas fa-trash">
                                                </i>
                                            </a>
                                        </td>
                                    </tr>
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
