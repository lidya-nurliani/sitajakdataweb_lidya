@extends('layouts.app')

@section('title','Perbaruan Plat')

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
            <div class="col-sm-6">
                <h1 class="m-0">Pembaruan Plat Nopol Kendaraan</h1>
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
                <a href="{{ route('create-perbaruanplat') }}" class="btn btn-success"> Tambah Data <i
                        class="far fa-plus-square"></i></a>
            </div>
            @endif
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered">
              <thead>
                <tr>
                    <th>No</th>
                    <th>nama pemegang</th>
                    <th>no polisi</th>
                    <th>tahun</th>
                    <th>pergantian plat/kali</th>
                    <th>masa berganti berikutnya</th>
                    <th>status</th>
                    <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($perbaruanplat as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->dafken->nama_pemegang }}</td>
                    <td>{{ $item->dafken->no_polisi }}</td>
                    <td>{{ $item->dafken->tahun }}</td>
                    <td>{{ $item->pergantian_plat }}</td>
                    <td>{{ $item->masa_berganti }}</td>
                    <td>{{ $item->status }}</td>

                    <td>
                        @if(auth()->user()->level == "admin")
                        <center>
                            <a href="{{ url('edit-perbaruanplat', $item->id) }}"><i class="fas fa-edit"></i></a>
                            |
                            <a href="{{ url('delete-perbaruanplat', $item->id) }}"><i class="fas fa-trash-alt"
                                    style="color: red"></i></a>
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