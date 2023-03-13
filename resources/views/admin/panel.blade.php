<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminBUMDES | Dashboard</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>

    {{-- bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/summernote/summernote-bs4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('public/style.css') }}">


    {{-- data tables --}}
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css"> --}}
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">




</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('AdminLTE/dist/img/tanpa_wifi.png') }}" alt="AdminLTELogo"
                height="60" width="60">
            <p> SELAMAT DATANG DI BUMDES DESA TUNJUNGSARI</p>
        </div>

        @include('admin/header')
        @include('admin/sidebar')
        @yield('content')
        @include('admin/footer')


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('AdminLTE/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('AdminLTE/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('AdminLTE/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('AdminLTE/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('AdminLTE/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('AdminLTE/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('AdminLTE/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('AdminLTE/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('AdminLTE/dist/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('AdminLTE/dist/js/pages/dashboard.js') }}"></script>


    {{-- bootstrp 5 --}}

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>

    <!-- DataTables JavaScript -->
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

    {{-- data table cetak --}}
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>

    {{-- datatabel --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>

    {{-- datatables js --}}
    {{-- <script>
        $(document).ready(function() {
            $('#myTable').DataTable()
        });
    </script> --}}

    <script type="text/javascript">
        // $(document).ready(function() {
        //     $('#myTable').DataTable({
        //         targets: [-1], // -1 mengacu pada kolom terakhir (dalam hal ini kolom "aksi")
        //         visible: true, // kolom "aksi" tidak terlihat
        //         dom: 'Bfrtip',
        //         buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
        //     });
        // });
        // $(document).ready(function() {
        //     $('#myTable').DataTable({
        //         select: {
        //             style: 'multi', // menambahkan mode multi-select ke tabel
        //             selector: 'td:first-child' // membuat kolom pertama sebagai selector
        //         },
        //         scrollCollapse: true,
        //         paging: true,
        //         dom: 'Bfrtip',
        //         buttons: [

        //             {
        //                 extend: 'pdfHtml5',
        //                 exportOptions: {
        //                     columns: ':not(:last-child,:nth-last-child(2))' // mengecualikan kolom aksi dan kolom terakhir
        //                 }
        //             },
        //             {
        //                 extend: 'excelHtml5',
        //                 exportOptions: {
        //                     columns: ':not(:last-child,:nth-last-child(2))' // mengecualikan kolom aksi dan kolom terakhir
        //                 }
        //             },
        //             {
        //                 extend: 'csvHtml5',
        //                 exportOptions: {
        //                     columns: ':not(:last-child,:nth-last-child(2))' // mengecualikan kolom aksi dan kolom terakhir
        //                 }
        //             },
        //             {
        //                 extend: 'print',
        //                 exportOptions: {
        //                     columns: ':not(:last-child,:nth-last-child(2))' // mengecualikan kolom aksi dan kolom terakhir
        //                 }
        //             },
        //             'copy'
        //         ]
        //     });
        // });

        $(document).ready(function() {
            var table = $('#myTable').DataTable({
                select: {
                    style: 'multi', // menambahkan mode multi-select ke tabel
                    selector: 'td:first-child' // membuat kolom pertama sebagai selector
                },
                scrollCollapse: true,
                paging: true,
                dom: 'Bfrtip',
                buttons: [{
                        text: 'PDF',
                        className: ' bg-danger',
                        extend: 'pdfHtml5',
                        exportOptions: {
                            columns: ':not(:last-child,:nth-last-child(2))' // mengecualikan kolom aksi dan kolom terakhir
                        }
                    },
                    {
                        text: 'Excel',
                        className: 'bg-success',
                        extend: 'excelHtml5',
                        exportOptions: {
                            columns: ':not(:last-child,:nth-last-child(2))' // mengecualikan kolom aksi dan kolom terakhir
                        }
                    },
                    {
                        text: 'CSV',
                        className: 'bg-primary',
                        extend: 'csvHtml5',
                        exportOptions: {
                            columns: ':not(:last-child,:nth-last-child(2))' // mengecualikan kolom aksi dan kolom terakhir
                        }
                    },
                    {
                        text: 'Print',
                        className: 'bg-info',
                        extend: 'print',
                        exportOptions: {
                            columns: ':not(:last-child,:nth-last-child(2))' // mengecualikan kolom aksi dan kolom terakhir
                        }
                    },
                ]
            });
        });

        $(document).ready(function() {
            $('table.table').DataTable();
        })
    </script>
</body>

</html>
