@extends('layouts.app')

@section('title','Edit Kendaraan')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">daftar kendaraan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Data Kendaraan</li>
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
            <h3>Edit Data Kendaraan</h3>
        </div>
    </div>
    <!-- /.content -->
</div>

<div class="card-body">
    <form action="{{ url('update-dafken', $dafken->id) }}" method="post">
        @csrf
        <div class="form-group">
            <input type="text" id="nama_pemegang" name="nama_pemegang" class="form-control" placeholder="Nama Pemegang"
                value="{{ $dafken->nama_pemegang }}">
        </div>

        <div class="form-group">
            <input type="text" id="merk_kendaraan" name="merk_kendaraan" class="form-control" placeholder="Merk Kendaraan"
                value="{{ $dafken->merk_kendaraan }}">
        </div>


        <div class="form-group">
            <select id="jenis_kendaraan" name="jenis_kendaraan" class="form-control" placeholder="Jenis Kendaraan"
                value="{{ $dafken->jenis_kendaraan }}">
                <option value="">Jenis Kendaraan</option>
                <option value="Roda 2">Roda 2</option>
                <option value="Roda 4">Roda 4</option>
            </select>
        </div>
        <div class="form-group">
            <input type="text" id="no_polisi" name="no_polisi" class="form-control" placeholder="no polisi"
                value="{{ $dafken->no_polisi }}">
        </div>
        <div class="form-group">
            <input type="text" id="no_mesin" name="no_mesin" class="form-control" placeholder="no mesin"
                value="{{ $dafken->no_mesin }}">
        </div>
        <div class="form-group">
            <input type="text" id="no_rangka" name="no_rangka" class="form-control" placeholder="no rangka"
                value="{{ $dafken->no_rangka }}">
        </div>
        <div class="form-group">
            <input type="text" id="tahun" name="tahun" class="form-control" placeholder="tahun"
                value="{{ $dafken->tahun }}">
        </div>
        <div class="form-group">
            <input type="text" id="harga_perolehan" name="harga_perolehan" class="form-control"
                placeholder="harga perolehan" value="{{ $dafken->harga_perolehan }}">
        </div>
        <div class="form-group">
            <select id="sumber_dana" name="sumber_dana" class="form-control" placeholder="sumber dana"
                value="{{ $dafken->sumber_dana }}">
                <option value="">Sumber dana</option>
                <option value="APBD">APBD</option>
                <option value="APBN">APBN</option>
            </select>
        </div>
        <div class="form-group">
            <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="keterangan"
                value="{{ $dafken->keterangan }}">
        </div>

        <div class="form-group">
            <input type="file" id="foto_fisik" name="foto_fisik" class="form-control" placeholder="foto fisik"
                value="{{ $dafken->foto_fisik }}">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Ubah Data</button>
        </div>
    </form>
</div>
@endsection