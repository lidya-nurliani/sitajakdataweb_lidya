
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
            <h1 class="m-0">Input Data Kendaraan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
    <div class="card card-info card-outline">
     <div class="card-header">
       <h3>Buat Data kendaraan</h3>
     </div>

       <div class="card-body">
       
       <form action="{{ route('simpan-dafken') }}" method="post" enctype="multipart/form-data">
       {{csrf_field() }}
       <div class="form-group">
            <input type="text" id="nama_pemegang" name="nama_pemegang" class="form-control" placeholder="Nama pemegang">
          </div>
          
          <div class="form-group">
          <select class="form-control select2" style="width : 100%;" name="jenis_kendaraan" id="jenis_kendaraan" placeholder="Jenis Kendaraan">
          <option value="">Jenis Kendaraan</option>
            <option value="Roda 2"> Roda 2</option>
            <option value="Roda 4"> Roda 4</option>
          </select>
          </div>

          <div class="form-group">
            <input type="text" id="no_polisi" name="no_polisi" class="form-control" placeholder="nomor polisi">
          </div>
          <div class="form-group">
            <input type="text" id="no_mesin" name="no_mesin" class="form-control" placeholder="nomor mesin">
          </div>
          <div class="form-group">
            <input type="text" id="no_rangka" name="no_rangka" class="form-control" placeholder="nomor rangka">
          </div>
          <div class="form-group">
            <input type="text" id="tahun" name="tahun" class="form-control" placeholder="tahun">
          </div>

          <div class="form-group">
            <input type="text" id="harga_perolehan" name="harga_perolehan" class="form-control" placeholder="harga_perolehan">
          </div>

         <div class="form-group">
          <select class="form-control select2" style="width : 100%;" name="sumber_dana" id="sumber_dana" placeholder="Sumber Dana">
          <option value="">Sumber Dana</option>
            <option value="APBD"> APBD</option>
            <option value="APBN"> APBN</option>
            <option value="-"> - </option>
          </select>
          </div>

          <div class="form-group">
            <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="keterangan">
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
