@extends('admin/panel')
@section('content')
    {{-- @include ('admin/mdb') --}}
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2 justify-content-between">
                    <div class="col-sm-6 mb-4">
                        <h1>Data Tagihan</h1>
                    </div>
                    <div class="card-tools">
                    </div>
                </div>
            </div>

            <!-- /.container-fluid -->
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('Lihat_tagihan') }}" method="GET">
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
                    <form action="{{ route('Lihat_tagihan') }}" method="GET">
                        <div class="mx-auto">
                            <label for="filter">Cari :</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="ketikan disini..." name="cari" value="{{ $request->cari }}">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">Cari</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div> --}}
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-primary btn-sm" href="/UpdateLinkPayment"><i class="fas fa-user-edit">
                                </i> Lihat Link</a>
                        </div>

                        <div class="card-body table-bordered-responsive p-0 mx-3 mt-3">
                            @if (count($datatagihan) > 0)
                                <table class=" table-bordered mdb-table text-wrap mb-3 hover stripe" id="myTable">
                                    <thead>
                                        <tr class="bg-secondary">
                                            <th>No.</th>
                                            {{-- <th>ID</th> --}}
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
                                                <td class="border">{{ $loop->iteration }}</td>
                                                {{-- <td>{{ $t->id_pengguna }}</td> --}}
                                                <td class="border">{{ date('d F Y', strtotime($t->tanggal)) }}</td>
                                                <td class="border">{{ $t->nama }}</td>
                                                <td class="border">{{ $t->phone }}</td>
                                                <td class="border">{{ $t->paket }}</td>
                                                <td class="border">Rp. {{ number_format($t->tagihan) }}</td>
                                                <td class="border"><label
                                                        class="badge {{ $t->status == 'Paid' ? 'badge-success' : 'badge-danger' }}">{{ $t->status == 'Paid' ? 'Lunas' : 'Belum Lunas' }}</label>
                                                </td>

                                                <td class="project-actions border">
                                                    <a class="btn btn-info btn-sm"
                                                        href="/admin/menu/Lunas/{{ $t->id }}">
                                                        <i class="fas fa-check"></i>
                                                        </i>
                                                    </a>
                                                    {{-- <a class="btn btn-success btn-sm" target="_blank"
                                                        href="https://wa.me/{{ $t->phone }}?text=kepada%20yang%20terhormat%20bapak/ibu%20pengguna%20layanan%20paket%20internet%20Bumdes%20Desa%20Tunjungsari,%20hari %20ini%20adalah%20masa%20tagihan%20pembayaran%20internet %20anda,%20anda%20dapat%20melakukan%20pembayaran%20secara%20online%20melalui%20link%20berikut.%0ALink pembayaran : %0Aatau%20anda%20dapat%20melakukan%20pembayaran%20manual%20bisa%20hubungi%20petugas%20:%20(085712666154)%20atau%20datang%20ke%20kantor%20bumdes.%0ATerimakasih">
                                                        <i class="fab fa-whatsapp"></i>
                                                        </i>
                                                    </a> --}}
                                                    {{-- <a class="btn btn-success btn-sm" target="_blank"
                                                        href="https://wa.me/{{ $t->phone }}?text=kepada%20yang%20terhormat%20*{{ $t->nama }}*%20pengguna%20layanan%20paket%20internet%20Bumdes%20Desa%20Tunjungsari,%20hari%20ini%20adalah%20masa%20tagihan%20pembayaran%20internet%20anda,%20anda%20dapat%20melakukan%20pembayaran%20secara%20online%20melalui%20link%20berikut:%0ALink%20pembayaran%20:%20
                                                        {{ $t->paket == 'Diamond'
                                                            ? 'https://app.sandbox.midtrans.com/payment-links/1676782088119PKTDiamond'
                                                            : ($t->paket == 'Gold'
                                                                ? 'https://app.sandbox.midtrans.com/payment-links/1676782031099PKTGold'
                                                                : 'https://app.sandbox.midtrans.com/payment-links/1676781876462PKTSilver') }}%0Aatau%20anda%20dapat%20melakukan%20pembayaran%20manual%20bisa%20hubungi%20petugas%20:%20(085712666154)%20atau%20datang%20ke%20kantor%20bumdes.%0ATerimakasih">
                                                        <i class="fab fa-whatsapp"></i>
                                                    </a> --}}
                                                    <a class="btn btn-success btn-sm" target="_blank"
                                                        href="https://wa.me/{{ $t->phone }}?text=kepada%20yang%20terhormat%20*{{ $t->nama }}*%20pengguna%20layanan%20paket%20internet%20Bumdes%20Desa%20Tunjungsari,%20hari%20ini%20adalah%20masa%20tagihan%20pembayaran%20internet%20anda,%20anda%20dapat%20melakukan%20pembayaran%20secara%20online%20melalui%20link%20berikut:%0ALink%20pembayaran%20:%20
                                                    
                                                        @if ($t->paket == 'Silver') {{ \App\Models\PayementLink::where('paket', 'Silver')->first()->link }} @endif
                                                        @if ($t->paket == 'Gold') {{ \App\Models\PayementLink::where('paket', 'Gold')->first()->link }} @endif
                                                        @if ($t->paket == 'Diamond') {{ \App\Models\PayementLink::where('paket', 'Diamond')->first()->link }} @endif
                                                        
                                                        %0Aatau%20anda%20dapat%20melakukan%20pembayaran%20manual%20bisa%20hubungi%20petugas%20:%20(085712666154)%20atau%20datang%20ke%20kantor%20bumdes.%0ATerimakasih">
                                                        <i class="fab fa-whatsapp"></i>
                                                    </a>


                                                    <div class="btn-group" role="group" aria-label="Basic example">

                                                        <form action="/admin/menu/LihatTagihan/{{ $t->id }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="button" class="btn btn-danger btn-sm"
                                                                data-toggle="modal"
                                                                data-target="#delete{{ $t->id }}"><i
                                                                    class="fas fa-trash"></i></button>
                                                            <div class="modal fade" id="delete{{ $t->id }}"
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
                                                                            Apakah Anda yakin ingin menghapus ini?
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
                                                            {{-- <input class="btn btn-danger btn-sm" type="submit" value="delete"> --}}
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
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </section>
    </div>
@endsection
