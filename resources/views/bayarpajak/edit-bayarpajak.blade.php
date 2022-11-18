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
          <div class="col-sm-6">
            <h1 class="m-0">data pembayar</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Pembayar</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class = "card card-info card-outline">
            <div class = "card-header">
               <h3>Edit Data Pembayar</h3>
</div>
    </div>
    <!-- /.content -->
  </div>

  <div class = "card-body">
            <form action="{{ url('update-bayarpajak', $bayarpajak->id) }}" method="post">
              @csrf

              <div class="form-group">
                <select id="unit_kerja" name="unit_kerja" class="form-control" placeholder="Unit kerja" value="{{ $bayarpajak->unit_kerja }}">
                    <option value="">Unit kerja/bidang</option>
                    <option value="Sekretariat"> Sekretariat</option>
                    <option value="Bidang TP"> Bidang TP</option>
                    <option value="Bidang Hortik"> Bidang Hortik</option>
                    <option value="Bidang KKP"> Bidang KKP</option>
                    <option value="Bidang KDP"> Bidang KDP</option>
                </select>
              </div>

              <div class="form-group">
                <select class="form-control select2" style="width: 100%;" name="dafken_id" id="dafken_id">
                <option  value="">daftar kendaraan</option>
                @foreach ($dafken as $item)
                <option value="{{ $item ['id'] }}"{{ $item ['id']==$bayarpajak->dafken_id ? 'selected="selected"' : '' }}>{{ $item->no_polisi."(".$item->jenis_kendaraan.") - ".$item->nama_pemegang }}</option>
                @endforeach
              </select>
              </div>

              <div class="form-group">
                <input type="text" id="pembayaran_pajak" name="pembayaran_pajak" class="form-control" placeholder="pembayaran pajak" value="{{ $bayarpajak->pembayaran_pajak }}">
              </div>

              <div class="form-group">
                <input type="date" id="tgl_bayar" name="tgl_bayar" class="form-control" placeholder="tgl bayar" value="{{ $bayarpajak->tgl_bayar }}">
              </div>

              <div class="form-group">
          <select class="form-control select2" style="width : 100%;" name="pemegang" id="pemegang" placeholder="Pemegang">
          <option  value=""> Pemegang</option>
            <option value="Aktif"> Aktif</option>
            <option value="Pasif"> Pasif</option>
          </select>  
          </div>

              <div class="form-group">
                <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="keterangan" value="{{ $bayarpajak->keterangan }}">
              </div>

              <div class="form-group">
               <button type="submit" class="btn btn-primary">Ubah Data</button> 
              </div>

    </div>
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

<!-- jQuery -->
@include('Template.script')
</body>
</html>