@extends('layouts.app')

@section('title','blmbayar')

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
            <div class="col-sm-10">
                <h1 class="m-0">Data Pembayar Pajak & STNK tahun berikutnya</h1>
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
                <a href="{{ route('create-blmbayar') }}" class="btn btn-success"> Tambah Data <i
                        class="far fa-plus-square"></i></a>
            </div>
            @endif
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered">
              <thead>
                <tr>
                    <th>No</th>
                    <th>unit kerja </th>
                    <th>nama pemegang</th>
                    <th>no polisi</th>
                    <th>tgl bayar selanjutnya</th>
                    <th>pemegang</th>
                    <th>keterangan</th>
                    <th>foto STNK/BPKB kendaraan</th>
                    <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($blmbayar as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->unit_kerja }}</td>
                    <td>{{ $item->dafken->nama_pemegang }}</td>
                    <td>{{ $item->dafken->no_polisi }}</td>
                    <td>{{ date('d-m-Y',strtotime($item->tgl_bayar_selanjutnya)) }}</td>
                    <td>{{ $item->pemegang }}</td>
                    <td>{{ $item->keterangan }}</td>
                    <td>
                        @if($item->foto_stnk)
                            <a target="blank" href="{{asset('foto_stnk/'.$item->foto_stnk)}}">Lihat Foto</a>
                        @else
                            <a>Tidak ada Foto</a>
                        @endif
                    </td>
                    <td>
                        @if(auth()->user()->level == "admin")
                        <center>
                            <a href="{{ url('edit-blmbayar', $item->id) }}"><i class="fas fa-edit"></i></a>
                            |
                            <a href="{{ url('delete-blmbayar', $item->id) }}"><i class="fas fa-trash-alt"
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
<!-- /.content -->
</div>
@endsection