@extends('admin/panel')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard Bumdes</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $Totaltagihan }}</h3>

                                <p>Tagihan</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-cash"></i>
                            </div>
                            <a href="/tagihan" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>

                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $Totaltransaksi }}<sup style="font-size: 20px"></sup></h3>

                                <p>Transaksi</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-arrow-graph-up-right"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>


                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $Totalpengguna }}<sup style="font-size: 20px"></sup></h3>

                                <p>Pengguna</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person"></i>
                            </div>
                            <a href="/pengguna" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>

                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>65</h3>

                                <p>Laporan Bulanan</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        <strong>INFORMASI</strong>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <table class="table">
                                            <thead>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="3" class="text-center"><strong> STRUKTUR
                                                            ORGANISASI</strong></td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        Ketua
                                                    </td>
                                                    <td>
                                                        :
                                                    </td>
                                                    <td>
                                                        M. Dani Fauzan
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        Sekertaris
                                                    </td>
                                                    <td>
                                                        :
                                                    </td>
                                                    <td>
                                                        Tawaffani Musliman
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        Bendahara
                                                    </td>
                                                    <td>
                                                        :
                                                    </td>
                                                    <td>
                                                        Anyssa Febriyanti
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        Pengawas
                                                    </td>
                                                    <td>
                                                        :
                                                    </td>
                                                    <td>
                                                        M. Iqbal Nurfrianto
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        Diatas merupakan struktur organisasi pengelola badan usaha milik desa Tunjungsari.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseTwo">
                                        <strong>APA ITU SIBUMDES?</strong>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingTwo">
                                    <div class="accordion-body">
                                        Merupakan Sistem Informasi Badan Usaha Milik Desa
                                        Tunjungsari yang digunakan untuk melakukan pengelolaan pengguna dan Tagihan
                                        Internet
                                        di Desa Tunjungsari, dengan adanya sistem ini diharapkan dapat mengelola
                                        pengguna
                                        dengan baik dan memberikan palayan yang baik juga kepada masyarakat desa
                                        Tunjungsari
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
            <!-- right col -->

    </div>
    </div>
    </section>
    <!-- /.content -->
    </div>
@endsection
