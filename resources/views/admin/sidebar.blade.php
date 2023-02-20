 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-2">
     <!-- Brand Logo -->
     {{-- <a href="index3.html" class="brand-link">
      <img src="{{ asset ('AdminLTE/dist/img/logobsr.jpg') }}" alt="BUMDES" class="brand-image img-Square elevation-2" style="opacity:">
      <span class="brand-text font-weight-light">BUMDES</span>
    </a> --}}

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="{{ asset('AdminLTE/dist/img/logo-bumdes.jpg') }}" class="img-circle elevation-1"
                     alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block">SIBUMDES </a>
             </div>
         </div>

         <!-- SidebarSearch Form -->
         <div class="form-inline">
             <div class="input-group" data-widget="sidebar-search">
                 <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                     aria-label="Search">
                 <div class="input-group-append">
                     <button class="btn btn-sidebar">
                         <i class="fas fa-search fa-fw"></i>
                     </button>
                 </div>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <li class="nav-header">PILIHAN MENU</li>
                 <li class="nav-item">
                     <a href="/homedashboard" class="nav-link">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Beranda
                         </p>
                     </a>
                 </li>
                 <li class="nav-header">LANGGANAN</li>
                 <li class="nav-item">
                     <a href="Lpengguna" class="nav-link">
                         <i class="nav-icon fas fa-user"></i>
                         <p>
                             Pengguna
                         </p>
                     </a>
                 </li>
                 <li class="nav-header">TAGIHAN DAN PEMBAYARAN</li>
                 <li class="nav-item">
                     <a href="/tagihan" class="nav-link">
                         <i class="nav-icon fas fa-book"></i>
                         <p>
                             Data Transaksi
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="/btagihan" class="nav-link">
                         <i class="nav-icon fas fa-edit"></i>
                         <p>
                             Buat Tagihan
                         </p>
                     </a>
                 </li>
                 <li class="nav-header">KEUANGAN</li>
                 <li class="nav-item">
                     <a href="/laporanBul" class="nav-link">
                         <i class="nav-icon fas fa-scroll"></i>
                         <p>
                             Laporan
                         </p>
                     </a>
                 </li>
                 <li class="nav-header">LAINNYA</li>
                 <li class="nav-item">
                     <a href="/user" class="nav-link">
                         <i class="nav-icon fas fa-user"></i>
                         <p>
                             Data Pengguna
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('logout_admin') }}" class="nav-link">
                         <i class="nav-icon fas fa-sign-out-alt"></i>
                         <p>
                             Logout
                         </p>
                     </a>
                 </li>
                 <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
