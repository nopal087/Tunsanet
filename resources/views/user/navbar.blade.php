<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light ">
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
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-primary" href="/"><strong>Beranda</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="#paket"><strong>Paket</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="#kelebihan"><strong>Kelebihan</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="#kontak"><strong>Kontak</strong></a>
                </li>
            </ul>
            <!-- Left links -->
        </div>

        <!-- Right elements -->
        <div class="d-flex align-items-center">
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
