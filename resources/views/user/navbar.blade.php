<style>
    /* Color of the links BEFORE scroll */
    .navbar-scroll .nav-link,
    .navbar-scroll .navbar-toggler .fa-bars {
        color: #fff;
    }

    /* Color of the links AFTER scroll */
    .navbar-scrolled .nav-link,
    .navbar-scrolled .navbar-toggler .fa-bars {
        color: #2d2d2e;
    }

    /* Color of the navbar AFTER scroll */
    .navbar-scrolled {
        background-color: #fff;
    }

    /* An optional height of the navbar AFTER scroll */
    .navbar.navbar-scroll.navbar-scrolled {
        padding-top: 5px;
        padding-bottom: 5px;
    }
</style>
<nav class="navbar navbar-expand-lg fixed-top navbar-scroll">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0 px-2" href="/">
                <img src="{{ asset('pengguna/img/Logo_Stempel.png') }}" alt="Logo" width="150">
            </a>
            <!-- Left links -->
            {{-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
                <a class="nav-link" aria-current="page" href="/">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#paket">Paket</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#kelebihan">Kelebihan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#kontak">Kontak</a>
            </li>
            </ul> --}}
        </div>

        <!-- Right elements -->
        <div class="d-flex align-items-center">
            <div class="dropdown">
                <button class="btn btn-link btn-rounded dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-mdb-toggle="dropdown" aria-expanded="false">
                    Menu
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="/">Beranda</a></li>
                    <li><a class="dropdown-item" href="#paket">Paket Internet</a></li>
                    <li><a class="dropdown-item" href="#kelebihan">Kelebihan</a></li>
                    <li><a class="dropdown-item" href="#kontak">Kontak</a></li>
                    <li><a class="dropdown-item" href="/agen">Daftar Agen</a></li>
                </ul>
            </div>
            <!-- Avatar -->
            <div class="dropdown">
                @auth
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="{{ route('logout') }}">Keluar</a></li>
                        </ul>
                    </div>
                @endauth
                @guest
                    <a class="me-3 py-2 text-dark text-decoration-none btn btn-secondary"
                        href="{{ route('register') }}">Daftar</a>
                    <a class="py-2 text-dark-decoration-none btn btn-primary" href="{{ route('login') }}">Masuk</a>
                @endguest
                </ul>
            </div>
        </div>
        <!-- Right elements -->
    </div>
</nav>
<script>
    window.onscroll = function() {
        var navbar = document.querySelector(".navbar");
        if (window.scrollY > 0) {
            navbar.classList.add("navbar-scrolled");
        } else {
            navbar.classList.remove("navbar-scrolled");
        }
    };
</script>
<!-- Animated navbar -->
