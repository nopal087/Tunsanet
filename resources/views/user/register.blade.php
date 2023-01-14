<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TUNSANET | Registration</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminLTE/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition register-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>BUMDES</b> SARI REJEKI</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Registrasi anggota</p>

                @if ($errors->any())
                    @foreach ($errors->all() as $err)
                        <p class="alert alert-danger">{{ $err }}</p>
                    @endforeach
                @endif
                <form action="{{ route('register.action') }}" method="post">
                    @csrf
                    {{-- nama --}}
                    <div class="input-group mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Nama"
                            value="{{ old('name') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    {{-- username --}}
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="username"
                            value="{{ old('username') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    {{-- email --}}
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control"
                            placeholder="email"value="{{ old('email') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    {{-- no hp --}}
                    <div class="input-group mb-3">
                        <input type="text" name="no_hp" class="form-control"
                            placeholder="Nomer Handphone"value="{{ old('no_hp') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone-alt"></span>
                            </div>
                        </div>
                    </div>
                    {{-- alamat --}}
                    <div class="input-group mb-3">
                        <input type="text" name="alamat" class="form-control"
                            placeholder="Alamat"value="{{ old('alamat') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-map-marker-alt"></span>
                            </div>
                        </div>
                    </div>
                    {{-- password --}}
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control"
                            placeholder="Password"value="{{ old('password') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    {{-- confirm password --}}
                    <div class="input-group mb-3">
                        <input type="password" name="password_confirmation" class="form-control"
                            placeholder="confirmation password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-4 d-flex">
                            <button name="submit" type="submit" class="btn btn-primary btn-block">Register</button>
                            <a class="btn btn-danger ml-2" href="{{ route('home') }}">back</a>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                {{-- <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i>
                        Sign up using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i>
                        Sign up using Google+
                    </a>
                </div> --}}

                <a href="/login" class="text-center">sudah mempunyai akun!</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.') }}"></script>
</body>

</html>
