@extends('admin/panel')
{{-- @include ('app') --}}
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Laporan</h1>
                    </div>
                </div>
            </div>
            {{-- table --}}
            <div class="row justify-content-center">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3>{{ $order }}</h3>

                            <p>Jumlah Transaksi</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-cash"></i>
                        </div>
                        <a href="/tagihan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3>Rp. {{ number_format($jumlahTotalPrice1) }}</h3>

                            <p>Jumlah Pemasukan Transaksi</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-arrow-graph-up-right"></i>
                        </div>
                        <a href="/tagihan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $totaltagihan }}</h3>

                            <p>Jumlah tagihan</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-cash"></i>
                        </div>
                        <a href="/LihatTagihan" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>Rp. {{ number_format($jumlahtagihantotal) }}</h3>

                            <p>Jumlah Pemasukan Tagihan</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-arrow-graph-up-right"></i>
                        </div>
                        <a href="/LihatTagihan" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>


            </div>
            <div class="card">
                <div class="row">
                    <div class="">
                        <div class="card-body">
                            <table class="table table-bordered text-wrap mb-3" border="2" id="table">
                                <thead>
                                    <div class="text-center" id="transaksi">
                                        <h4>Tabel Pembelian Paket Internet</h4>
                                    </div>
                                    @if (count($datalaporan1) > 0)
                                        <tr class="bg-secondary">
                                            <th>No.</th>
                                            <th>Tanggal</th>
                                            <th>Nama</th>
                                            <th>Paket</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    @else
                                        <div class="text-center">
                                            <img src="{{ asset('pengguna/img/empty.jpg') }}" alt="No Data Found"
                                                width="35%">
                                            <p>Tidak ada data yang tersedia.</p>
                                        </div>
                                    @endif
                                </thead>
                                <tbody>
                                    @foreach ($table_order as $item)
                                        <tr>
                                            <td class="border">{{ $loop->iteration }}</td>
                                            <td class="border">
                                                {{ $item->updated_at->translatedFormat('d F Y') }}
                                            </td>
                                            <td class="border">
                                                {{ $item->nama }}
                                            </td>
                                            <td class="border">
                                                {{ $item->paket }}
                                            </td>
                                            <td class="border">
                                                Rp. {{ number_format($item->total_price) }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="row">
                    <div class="card-body">
                        <table class="table table-bordered text-wrap mb-3" border="2" id="table">
                            <thead>
                                <div class="text-center" id="tagihan">
                                    <h4>Tabel Tagihan Paket Internet</h4>
                                </div>
                                <tr class="bg-secondary">
                                    <th>No.</th>
                                    <th>Tanggal</th>
                                    <th>Nama</th>
                                    <th>Paket</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            @foreach ($table_tagihan as $tag)
                                <tbody>
                                    <tr>
                                        <td class="border">{{ $loop->iteration }}</td>
                                        <td class="border">
                                            {{ $tag->tanggal }}
                                        </td>
                                        <td class="border">
                                            {{ $tag->nama }}
                                        </td>
                                        <td class="border">
                                            {{ $tag->paket }}
                                        </td>
                                        <td class="border">
                                            Rp. {{ number_format($tag->tagihan) }}
                                        </td>
                                    </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </section>
    </div>
@endsection
