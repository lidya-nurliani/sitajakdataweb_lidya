<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
<title>Pajak | Starter</title>
    @include('Template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 
  @include('Template.left-sidebar')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <center>
            <h1 class="m-0">Daftar Kendaraan Dinas Roda 2 dan Roda 4 DISPANTPH Provinsi Kalimantan Timur</h1>
            </center>
            </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class = "card card-info card-outline">
            <div class = "card-header">
               <h3>List Daftar Kendaraan</h3>
            </div>
        </div>

    <!-- /.content -->
  </div>

  


    <!-- Main content -->
    <div class="content">
    <div class="card card-info card-outline">
       <div class="card-header">
         <div class="card-tools">
         @if(auth()->user()->level == "admin")
           <a href="{{ route('create-dafken') }}" class="btn btn-success"> Tambah Data <i class="far fa-plus-square"></i></a>
            </div>
            @endif
       </div>

       
       <div class="card-body">
         <table class="table table-bordered">
           <tr>
             <th>No</th>
             <th>nama pemegang</th>
             <th>Jenis kendaraan</th>
             <th>no polisi</th>
             <th>no mesin</th>
             <th>no rangka</th>
             <th>tahun</th>
             <th>harga perolehan</th>
             <th>sumber dana</th>
             <th>keterangan</th>
             <th>Aksi</th>
           </tr>
           @foreach ($dafken as $item)
           <tr>
            <td>{{ $dafken->count() * ($dafken->currentPage() - 1) + $loop->iteration }}</td>
            <td>{{ $item->nama_pemegang}}</td>
            <td>{{ $item->jenis_kendaraan}}</td>
            <td>{{ $item->no_polisi}}</td>
            <td>{{ $item->no_mesin}}</td>
            <td>{{ $item->no_rangka}}</td>
            <td>{{ $item->tahun}}</td>
            <td>Rp. {{ number_format($item->harga_perolehan) }}</td>
            <td>{{ $item->sumber_dana}}</td>
            <td>{{ $item->keterangan}}</td>

          
            <td>
            @if(auth()->user()->level == "admin")
            <center>
              <a href="{{ url('edit-dafken', $item->id) }}"><i class="fas fa-edit"></i></a>
              |
              <a href="{{ url('delete-dafken', $item->id) }}"><i class="fas fa-trash-alt" style="color: red"></i></a>
            </center>
            @endif
            </td>
           </tr>
           @endforeach
         </table>

         <div class="card-footer">
            {{ $dafken->links() }}  
          </div>

       </div>
     </div>


    
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('Template.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('Template.script')
<!-- jQuery -->

</body>
</html>
