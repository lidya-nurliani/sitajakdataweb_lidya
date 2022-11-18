
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>

    <title>pajak | Starter</title>
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
            <h1 class="m-0">data Nopol Kendaraan</h1>
          </div><!-- /.col -->
        
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
    <div class="card card-info card-outline">
     <div class="card-header">
     </div>
       <div class="card-body">
       
       <form action="{{ route('simpan-perbaruanplat') }}" method="post" enctype="multipart/form-data">
       {{csrf_field() }}
        
        <div class="form-group">
          <select class="form-control select2" style="width : 100%;" name="dafken_id" id="dafken_id">
            <option value=""> Data Kendaraan</option>
            @foreach ($dafken as $item)
            <option value="{{ $item->id }}">{{ $item->no_polisi."(".$item->tahun.") - ".$item->nama_pemegang }}</option>
            @endforeach
        </select>
        </div> 

          <div class="form-group">
            <input type="text" id="pergantian_plat" name="pergantian_plat" class="form-control" placeholder="pergantian plat">
          </div>

          <div class="form-group">
            <input type="text" id="masa_berganti" name="masa_berganti" class="form-control" placeholder="masa berganti">
          </div>

          <div class="form-group">
          <select class="form-control select2" style="width : 100%;" name="status" id="status" placeholder="Status">
          <option  value=""> Status</option>
            <option value="sudah berganti"> sudah berganti</option>
            <option value="belum berganti"> belum berganti</option>
          </select>  
          </div>
         

          <div class="form-group">
          <button type="submit" class="btn btn-success">Simpan Data</button> 
          </div>
      
          
        </form>
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
