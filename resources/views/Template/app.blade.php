<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SITTAJAK DATA | @yield('title')</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('adminLte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminLte/dist/css/adminlte.min.css?v=3.2.0') }}">
    @yield('css')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-olive navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                </li>
                <!-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li> -->
            </ul>

            <ul class="navbar-nav ml-auto">
                <!-- <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
               
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-green-primary elevation-4">
            <a href="#" class="brand-link">
                <img src="{{ asset('AdminLte/dist/img/logoawal.png')}}" height="80" width="90">SITAJAK DATA
            </a>
            <head>
            <style media="screen">
    body{
      background-color: #2F4F4F;
    }
</style>
</head>
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                    <i class="fas fa-solid fa-user-tie"></i>
       </div>
                    <div class="info">
                    <a href="#" class="d-block">{{ auth()->user()->name }}</a>
                    </div>
                </div>
                <!-- <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div> -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link ">
                                <i class="fas fa-home"></i>
                                <p><font color="white">Dashboard</font></p>
                            </a>
                        </li>
                        <li class="nav-item">
            <a href="#" class="nav-link ">
            <i class="fas fa-user"></i>
              <p>
                Daftar Kendaraan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('index-dafken') }}" class="nav-link ">
                <i class="fas fa-file-alt"></i>
                  <p>Data kendaraan</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="" class="nav-link ">
            <i class="fas fa-users"></i>
              <p>
               Pembayar Pajak & STNK
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('index-bayarpajak') }}" class="nav-link ">
                <i class="fas fa-file-alt"></i>
                  <p>Data Pembayar Selesai</p>
                </a>
                <a href="{{ route('index-blmbayar') }}" class="nav-link ">
                <i class="fas fa-file-alt"></i>
                  <p>Data Pembayar Selanjutnya</p>
                </a>
              </li>
              
             
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link ">
            <i class="fas fa-table"></i>
              <p>
                Surat kuasa
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{ route('index-suratkuasa') }}" class="nav-link ">
                <i class="fas fa-file-alt"></i>
                  <p>Surat kuasa</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link ">
            <i class="fas fa-table"></i>
              <p>
                Perbaruan NOPOL Kendaraan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{ route('index-perbaruanplat') }}" class="nav-link ">
                <i class="fas fa-file-alt"></i>
                  <p>Perbaruan Plat</p>
                </a>
              </li>
            </ul>
          </li>
                        <li class="nav-item">
                            <a href="{{ route('logout') }}" class="nav-link ">
                                <i class="fas fa-sign-out-alt"></i>
                                <p><font color="white">
                                     Logout
                                </font></p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            @yield('content')
        </div>

        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                By RA
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2022 <a href="https://adminlte.io">Aplikasi pajak kendaraan by dispantph</a>.</strong>
        </footer>
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
    <script src="{{ asset('adminLte/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('adminLte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('adminLte/dist/js/adminlte.min.js?v=3.2.0') }}"></script>
    @yield('js')
</body>
</html>