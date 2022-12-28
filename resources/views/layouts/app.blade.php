<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SitajakData | @yield('title')</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('AdminLte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLte/dist/css/adminlte.min.css?v=3.2.0') }}">
    @yield('css')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand bg-blue navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('home') }}" class="nav-link"><font color="black">Home</font></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link"><font color="black">Dinas Pangan, Tanaman Pangan dan Hortikultura</font></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar bg-blue sidebar-dark-light elevation-4">
            <a href="#" class="brand-link">
                <img src="{{ asset('AdminLte/dist/img/1.png')}}" height="80" width="90">SITAJAK DATA
            </a>

        
            <div class="sidebar">
                <div class="user-panel mt-4 pb-4 mb-4 d-flex">
                    <div class="image">
                        <i class="fas fa-solid fa-user-tie mt-2"></i>
                    </div>
                    <div class="info">
                            <a href="#" class="d-block">
                            <font color="white">Hai {{ auth()->user()->name }} !</font>
                            </a>
                        
                    </div>
                </div>
                
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link ">
                               
                                <p>
                                    <font color="white"> <i class="fas fa-home "></i>Dashboard</font>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                               
                                <p>
                                    <font color="white">
                                    <i class="fas fa-users"></i>    
                                    Daftar Kendaraan</font>
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('index-dafken') }}" class="nav-link ">
                                        <i class="fas fa-file-alt"></i>
                                        <p>
                                        <font color="white">Data kendaraan</font>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link ">
                               
                                <p>
                                    <font color="white"> 
                                        <i class="fas fa-calculator"></i>
                                    Pembayar Pajak STNK</font>
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('index-bayarpajak') }}" class="nav-link ">
                                        <i class="fas fa-file-alt"></i>
                                        <p>
                                        <font color="white">Data Pembayar belum lunas</font>
                                    
                                    </p>
                                    </a>
                                    <a href="{{ route('index-blmbayar') }}" class="nav-link ">
                                        <i class="fas fa-file-alt"></i>
                                        <p>
                                        <font color="white">Data Pembayar Pajak Selanjutnya/lunas</font>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                
                                <p>
                                    <font color="white">
                                    <i class="fas fa-envelope"></i>
                                     Surat kuasa</font>
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('index-suratkuasa') }}" class="nav-link ">
                                        <i class="fas fa-file-alt"></i>
                                        <p><font color="white">Surat kuasa</font></p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                            <font color="white">
                                 <i class="fas fa-calendar-alt"></i>
                                <p>Perbaruan NOPOL Kendaraan</font>
                                <i class="right fas fa-angle-left"></i>
                                </p>
                                
                                
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('index-perbaruanplat') }}" class="nav-link ">
                                        <i class="fas fa-file-alt"></i>
                                        <p><font color="white">Perbaruan Plat</font></p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                <font color="white">
                                    <i class="fas fa-sign-out-alt"></i>
                                {{ __('Logout') }}
                                </font>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
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
                Lidya Nurliani
            </div>
            
            <!-- Default to the left -->
            <strong>Copyright &copy; 2022 <a href="https://adminlte.io">Sistem Informasi Data pajak
                    kendaraan</a>.</strong> All rights reserved.
        </footer>
    </div>
    <script src="{{ asset('AdminLte/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('AdminLte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('AdminLte/dist/js/adminlte.min.js?v=3.2.0') }}"></script>
    @yield('js')
</body>
</html>