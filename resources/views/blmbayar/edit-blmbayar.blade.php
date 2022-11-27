@extends('layouts.app')

@section('title','Pembayaran Pajak & STNK')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">data Pembayar</h1>
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
    <div class="card card-info card-outline">
        <div class="card-header">
            <h3>Edit Data Pembayar</h3>
        </div>
    </div>
    <!-- /.content -->
</div>

<div class="card-body">
    <form action="{{ url('update-blmbayar', $blmbayar->id) }}" method="post">
        @csrf
        <div class="form-group">
            <select id="unit_kerja" name="unit_kerja" class="form-control" placeholder="Unit kerja"
                value="{{ $blmbayar->unit_kerja }}">
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
                <option value="">daftar kendaraan</option>
                @foreach ($dafken as $item)
                <option value="{{ $item ['id'] }}"
                    {{ $item ['id']==$blmbayar->dafken_id ? 'selected="selected"' : '' }}>
                    {{ $item->no_polisi."(".$item->jenis_kendaraan.") - ".$item->nama_pemegang }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <input type="date" id="tgl_bayar_selanjutnya" name="tgl_bayar_selanjutnya" class="form-control"
                placeholder="tgl bayar" value="{{ $blmbayar->tgl_bayar }}">
        </div>
        <div class="form-group">
            <select class="form-control select2" style="width : 100%;" name="pemegang" id="pemegang"
                placeholder="Pemegang">
                <option value=""> Pemegang</option>
                <option value="Aktif"> Aktif</option>
                <option value="Pasif"> Pasif</option>
            </select>
        </div>
        <div class="form-group">
            <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="keterangan"
                value="{{ $blmbayar->keterangan }}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Ubah Data</button>
        </div>
    </form>
</div>
@endsection