@extends('admin/panel')
{{-- @include ('app') --}}
@section('content')
    {{-- {{ json_encode($data) }} --}}
    <div class="content-wrapper">
        {{-- <p class="ml-4">Tanggal sekarang :<b> {{ $tanggal_sekarang }}</b></p> --}}


        <section class="content p-3">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Link Tagihan</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class=" container">
                                <form action="/admin/menu/paymentlink/{{ $Paymentlink->id }}" method="POST">
                                    @method('put')
                                    @csrf
                                    <div class="form-group">
                                        <label for="paket">Pilih Paket</label>
                                        <select name="paket" id="" class="form-control">
                                            <option value="">Pilih Paket Internet</option>
                                            <option value="Silver" @if ($Paymentlink->paket == 'Silver') selected @endif>Silver
                                            </option>
                                            <option value="Gold" @if ($Paymentlink->paket == 'Gold') selected @endif>Gold
                                            </option>
                                            <option value="Diamond" @if ($Paymentlink->paket == 'Diamond') selected @endif>
                                                Diamond
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="link">Link Pembayaran</label>
                                        <input type="text" class="form-control" id="link" name="link"
                                            value="{{ $Paymentlink->link }}">
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-4">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- right column -->
                    {{-- <div>
                        <table class="table table-hover text-nowrap mb-3">
                            <thead>
                                <tr class="bg-primary-subtle">
                                    <th>No.</th>
                                    <th>Paket</th>
                                    <th>Link</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Paymentlink as $link)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $link->paket }}</td>
                                        <td>{{ $link->link }}</td>
                                        <td class="project-actions">
                                            <a class="btn btn-info btn-sm"
                                                href="admin/menu/pengguna/{{ $link->id }}/edit">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                            </a>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <form action="/admin/menu/tagihan/" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                        data-target="#confirm-delete-">Hapus</button>
                                                    <div class="modal fade" id="confirm-delete-" tabindex="-1"
                                                        role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                    </div> --}}
                </div>
            </div>

        </section>

    </div>
@endsection
