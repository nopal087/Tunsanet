@extends('admin/panel')
{{-- @include ('app') --}}
@section('content')
    <style>
        /* style tabel */
        td {
            max-width: 200px;
            /* ukuran maksimum kolom tabel */
            word-wrap: break-word;
            /* memastikan teks panjang tidak melebar */
        }
    </style>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2 justify-content-between">
                    <div class="col-sm-6 mb-3">
                        <h1>Data Transaksi</h1>
                    </div>

                </div>
            </div>
            <!-- /.container-fluid -->
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('transaksi') }}" method="GET">
                        <div class="form-group">
                            <label for="filter">Filter Status :</label>
                            <select name="filter" id="filter" class="form-control" onchange="this.form.submit()">
                                <option value="all" {{ $filter == 'all' ? 'selected' : '' }}>Semua</option>
                                <option value="belum_bayar" {{ $filter == 'belum_bayar' ? 'selected' : '' }}>Belum lunas
                                </option>
                                <option value="lunas" {{ $filter == 'lunas' ? 'selected' : '' }}>Lunas</option>
                            </select>
                        </div>
                    </form>
                </div>
                {{-- <div class="col-8">
                    <form action="{{ route('transaksi') }}" method="GET">
                        <div class="mx-auto">
                            <label for="filter">Cari :</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="search-input" placeholder="ketikan disini..."
                                    name="cari" value="{{ $request->cari }}">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary" id="search-button">Cari</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div> --}}
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-bordered-responsive p-0 mx-3 mt-3">
                            @if (count($datatransaksi) > 0)
                                <table class="table-bordered text-wrap mb-3 hover stripe" id="myTable">

                                    <thead>
                                        <tr class="bg-secondary">

                                            <th>No.</th>
                                            <th>ID</th>
                                            <th>Tanggal</th>
                                            <th>Nama</th>
                                            <th>No.Telephone</th>
                                            <th>Alamat</th>
                                            <th>Paket</th>
                                            <th>Jumlah</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $item)
                                            <tr>

                                                <td class="border">{{ $loop->iteration }}</td>
                                                <td class="border">{{ $item->id }}</td>
                                                <td class="border">
                                                    {{ $item->updated_at->translatedFormat('d F Y, H:i:s') }}
                                                </td>
                                                <td class="border">{{ $item->nama }}</td>
                                                <td class="border">{{ $item->phone }}</td>
                                                <td class="border">{{ $item->alamat }}</td>
                                                <td class="border">{{ $item->paket }}</td>
                                                <td class="border">Rp. {{ number_format($item->total_price) }}</span>
                                                </td>
                                                <td class="border"><label
                                                        class="badge {{ $item->status == 'Paid' ? 'badge-success' : 'badge-danger' }}">{{ $item->status == 'Paid' ? 'Lunas' : 'Belum Lunas' }}</label>
                                                    {{-- <a class="btn btn-danger btn-sm" href="#">
                                                    Belum bayar
                                                </a> --}}
                                                </td>
                                                <td class="project-actions border">
                                                    <a class="btn btn-info btn-sm"
                                                        href="/admin/manual/lunas/{{ $item->id }}">
                                                        <i class="fas fa-check"></i>
                                                        </i>
                                                    </a>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <form action="/admin/menu/tagihan/{{ $item->id }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="button" class="btn btn-danger btn-sm"
                                                                data-toggle="modal"
                                                                data-target="#confirm-delete-{{ $item->id }}"><i
                                                                    class="fas fa-trash"></i></button>
                                                            <div class="modal fade" id="confirm-delete-{{ $item->id }}"
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
                                @else
                                    <!-- Tampilkan tabel data pengguna -->
                                @endif
                            @else
                                <div class="text-center">
                                    <img src="{{ asset('pengguna/img/empty.jpg') }}" alt="No Data Found" width="50%">
                                    <p>Tidak ada data yang tersedia.</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
