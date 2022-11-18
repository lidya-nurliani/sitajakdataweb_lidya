<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
    <img src="{{ asset('AdminLte/dist/img/logohome.png')}}" height="70" width="90">
      <span class="brand-text font-weight-light">Sitajak Data</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><p>Hai, {{ auth()->user()->name }} !</p></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
               
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
              <a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                  <i class="fas fa-sign-out-alt"></i>
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>