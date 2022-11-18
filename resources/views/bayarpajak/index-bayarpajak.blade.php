
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>

    <title>Sistem Informasi Data Pajak Kendaraan | Starter</title>
    @include('Template.head')
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('Template.navbar')
  <!-- /.navbar -->
  @include('Template.left-sidebar')
  <!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pembayaran Pajak & STNK</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


   

    <!-- Main content -->
    <div class="content">
    <div class="card card-info card-outline">
       <div class="card-header">
         <div class="card-tools">
         @if(auth()->user()->level == "admin")
           <a href="{{ route('create-bayarpajak') }}" class="btn btn-success"> Tambah Data <i class="far fa-plus-square"></i></a>
            </div>
            @endif
       </div>
       <div class="card-body">
         <table class="table table-bordered">
           <tr>
             <th>No</th>
             <th>unit kerja </th>
             <th>nama pemegang</th>
             <th>no polisi</th>
             <th>pembayaran pajak</th>
             <th>tgl bayar</th>
             <th>pemegang</th>
             <th>keterangan</th>
             <th>Aksi</th>
           </tr>
           @foreach ($bayarpajak as $item)
           <tr>
           <td>{{ $bayarpajak->count() * ($bayarpajak->currentPage() - 1) + $loop->iteration }}</td>
            <td>{{ $item->unit_kerja }}</td>
            <td>{{ $item->dafken->nama_pemegang }}</td>
            <td>{{ $item->dafken->no_polisi }}</td>
            <td>Rp. {{ number_format($item->pembayaran_pajak) }}</td>
            <td>{{ date('d-m-Y',strtotime($item->tgl_bayar)) }}</td>
            <td>{{ $item->pemegang }}</td>
            <td>{{ $item->keterangan }}</td>
            <td>
            @if(auth()->user()->level == "admin")
            <center>
              <a href="{{ url('edit-bayarpajak', $item->id) }}"><i class="fas fa-edit"></i></a>
              
              <a href="{{ url('delete-bayarpajak', $item->id) }}"><i class="fas fa-trash-alt" style="color: red"></i></a>
            </center>
            @endif
</td>
           </tr>
           @endforeach

         </table>

         <div class="card-footer">
            {{ $bayarpajak->links() }}  
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
