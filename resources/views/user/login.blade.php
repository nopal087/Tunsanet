<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />
    {{-- mdb end --}}
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
</head>

<body class="hold-transition login-page">
    {{-- <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>BUMDES</b> SARI REJEKI</a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Silahkan Login</p>

                @if (session('success'))
                    <p class="alert alert-success">{{ session('success') }}</p>
                @endif
                @if ($errors->any())
                    @foreach ($errors->all() as $err)
                        <p class="alert alert-danger">{{ $err }}</p>
                    @endforeach
                @endif

                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" autofocus required
                            value="{{ old('email') }}" value="{{ old('email') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password"
                            value="{{ old('password') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <button name="submit" type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                    </div>
                </form>

                <p class="mb-1">
                </p>
                <p class="mb-0">
                    Belum punya akun ? <a href="{{ route('register') }}" class="text-center">Daftar</a>
                </p>
            </div>
        </div>
    </div> --}}
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="{{ asset('pengguna/img/Login2.png') }}" width="100%" class="img-fluid"
                        alt="Phone image">
                </div>
                {{-- <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <div class="login-logo">
                        <a href="#"><b>BUMDES</b> SARI REJEKI</a>
                    </div> --}}
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card">
                        <div class="card-body py-5 px-md-5">
                            @if (session('success'))
                                <p class="alert alert-success">{{ session('success') }}</p>
                            @endif
                            @if ($errors->any())
                                @foreach ($errors->all() as $err)
                                    <p class="alert alert-danger">{{ $err }}</p>
                                @endforeach
                            @endif
                            <form method="post" action="{{ route('login') }}">
                                @csrf
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" name="email" id="form1Example13"
                                        class="form-control form-control-lg" value="{{ old('email') }}" />
                                    <label class="form-label" for="form1Example13">Email address</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" name="password" id="form1Example23"
                                        class="form-control form-control-lg" value="{{ old('password') }}" />
                                    <label class="form-label" for="form1Example23">Password</label>
                                </div>

                                <div class="d-flex justify-content-around align-items-center mb-4">
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="form1Example3" checked />
                                        <label class="form-check-label" for="form1Example3"> Remember me </label>
                                    </div>
                                    <a href="#!">Forgot password?</a>
                                </div>

                                <!-- Submit button -->
                                <button name="submit" type="submit"
                                    class="btn btn-primary btn-lg btn-block">Login</button>
                                <div class="divider d-flex align-items-center my-4">
                                    <p class="text-center fw-bold mx-3 mb-0 text-muted">Belum Punya akun?</p>
                                </div>
                                <a href="{{ route('register') }}" class="btn-lg btn-block btn btn-outline-primary"
                                    data-mdb-ripple-color="dark" role="button">Daftar
                                    Sekarang
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
    </section>
    <!-- /.login-box -->

    {{-- @include('user/footer') --}}

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

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
</body>

</html>
