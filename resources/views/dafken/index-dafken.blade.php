@extends('layouts.app')

@section('title','Data Kendaraan')

@section('css')
<link rel="stylesheet" href="{{ asset('AdminLte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('AdminLte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('AdminLte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('js')
<script src="{{ asset('AdminLte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('AdminLte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('AdminLte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('AdminLte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('AdminLte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('AdminLte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('AdminLte/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('AdminLte/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('AdminLte/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('AdminLte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('AdminLte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('AdminLte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('AdminLte/dist/js/adminlte.min.js?v=3.2.0') }}"></script>
<script src="{{ asset('AdminLte/dist/js/demo.js') }}"></script>
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true
        });
    });
</script>
@endsection

@section('content')
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
    <div class="card card-info card-outline">
        <div class="card-header">
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
                <a href="{{ route('create-dafken') }}" class="btn btn-success"> Tambah Data <i
                        class="far fa-plus-square"></i></a>
            </div>
            @endif
        </div>

        
        <div class="card-body">
        <div style="overflow-x:auto">
            <table id="example1" class="table table-bordered">
              <thead>
                <tr>
                    <th>No</th>
                    <th>nama pemegang</th>
                    <th>merk kendaraan</th>
                    <th>Jenis kendaraan</th>
                    <th>no polisi</th>
                    <th>no mesin</th>
                    <th>no rangka</th>
                    <th>tahun</th>
                    <th>harga perolehan</th>
                    <th>sumber dana</th>
                    <th>keterangan</th>
                    <th>foto fisik kendaraan</th>
                    <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($dafken as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_pemegang}}</td>
                    <td>{{ $item->merk_kendaraan}}</td>
                    <td>{{ $item->jenis_kendaraan}}</td>
                    <td>{{ $item->no_polisi}}</td>
                    <td>{{ $item->no_mesin}}</td>
                    <td>{{ $item->no_rangka}}</td>
                    <td>{{ $item->tahun}}</td>
                    <td>Rp. {{ number_format($item->harga_perolehan) }}</td>
                    <td>{{ $item->sumber_dana}}</td>
                    <td>{{ $item->keterangan}}</td>
                    <td>
                        @if($item->foto_fisik)
                            <a target="blank" href="{{asset('foto_fisik/'.$item->foto_fisik)}}">Lihat Foto</a>
                        @else
                            <a>Tidak ada Foto</a>
                        @endif
                    </td>
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
              </tbody>
            </table>
        </div>
        </div>

</div>
</div>
<!-- /.content -->
@endsection