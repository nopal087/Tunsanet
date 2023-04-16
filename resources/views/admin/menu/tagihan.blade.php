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
        <div class="card">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2 justify-content-between">
                        <div class="col-sm-6 mb-3">
                            <h1>Data Transaksi</h1>
                        </div>

                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <h3>{{ $order }}</h3>

                                <p>Jumlah Transaksi Lunas</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-cash"></i>
                            </div>
                            <a href="/tagihan" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{ $order1 }}</h3>

                                <p>Jumlah Transaksi Belum Lunas</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-cash"></i>
                            </div>
                            <a href="/tagihan" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-primary">
                            <div class="inner total-transaksi">
                                <h3>Rp.{{ number_format($jumlahTotalPrice1) }}</h3>

                                <p>Total Semua Pemasukan Transaksi</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-arrow-graph-up-right"></i>
                            </div>
                            <a href="/tagihan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- /.container-fluid -->
                <div class="row m-2">
                    <div class="col-6">
                        <form action="{{ route('transaksi') }}" method="GET">
                            <div class="form-group">
                                <label for="filter">Filter Status :</label>
                                <select name="filter" id="filter" class="form-control" onchange="this.form.submit()">
                                    <option value="all" {{ $filter == 'all' ? 'selected' : '' }}>Semua</option>
                                    <option value="belum_bayar" {{ $filter == 'belum_bayar' ? 'selected' : '' }}>Belum
                                        lunas
                                    </option>
                                    <option value="lunas" {{ $filter == 'lunas' ? 'selected' : '' }}>Lunas</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="col-6 mt-4">
                        <div class="form-group">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header " id="headingTwo">
                                        <button class="accordion-button collapsed fw-bold" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo"><i class="fas fa-question-circle fa-sm me-2"></i>
                                            Informasi
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>Total Semua Pemasukan Transaksi</strong> dihitung dari semua transaksi
                                            yang ada, jika anda ingin menghitung total transaksi sesuai bulan yang
                                            diinginkan, silahkan cari pada kolom pencarian bulan yang ingin anda cari lalu
                                            cetak excel lalu gunakan fungsi excel untuk melakukan penghitungan, contoh =
                                            =SUM(h2:h10)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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

                    <!-- Date range filter modal -->
                    <div class="modal fade" id="date-range-modal" tabindex="-1" role="dialog"
                        aria-labelledby="date-range-modal-label" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="date-range-modal-label">Filter Tanggal</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="date-range-form">
                                        <div class="form-group">
                                            <label for="start-date">Start Date:</label>
                                            <input type="date" class="form-control" id="start-date" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="end-date">End Date:</label>
                                            <input type="date" class="form-control" id="end-date" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Filter</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">

                        <div class="card-body table-bordered-responsive p-0 mx-3 mt-3">
                            @if (count($datatransaksi) > 0)
                                <table class="table-bordered text-wrap mb-3 hover stripe" id="myTable2">

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
                                                {{-- <td class="border">
                                                    {{ $item->updated_at->translatedFormat('Y-m-d') }}
                                                </td> --}}
                                                <td class="border">
                                                    {{ $item->updated_at->translatedFormat('d F Y, H:i:s') }}
                                                </td>
                                                <td class="border">{{ $item->nama }}</td>
                                                <td class="border">{{ $item->phone }}</td>
                                                <td class="border">{{ $item->alamat }}</td>
                                                <td class="border">{{ $item->paket }}</td>
                                                <td class="border">
                                                    {{ number_format($item->total_price) }}</span>
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
                                                            <div class="modal fade"
                                                                id="confirm-delete-{{ $item->id }}" tabindex="-1"
                                                                role="dialog" aria-labelledby="myModalLabel"
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
                                    <tfoot>
                                        <tr>
                                            <th colspan="7" style="text-align:right">Total:</th>
                                            <th colspan="3"></th>
                                        </tr>
                                    </tfoot>
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
