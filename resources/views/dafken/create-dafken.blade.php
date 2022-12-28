@extends('layouts.app')

@section('title','Input Kendaraan')

@section('content')
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
                <label>Nama pemegang</label>
                    <input type="text" id="nama_pemegang" name="nama_pemegang" class="form-control"
                        placeholder="Nama pemegang">
                </div>

                <div class="form-group">
                <label>Merk Kendaraan</label>
                    <input type="text" id="merk_kendaraan" name="merk_kendaraan" class="form-control"
                        placeholder="Merk Kendaraan">
                </div>

                <div class="form-group">
                <label>Jenis Kendaraan</label>
                    <select class="form-control select2" style="width : 100%;" name="jenis_kendaraan"
                        id="jenis_kendaraan" placeholder="Jenis Kendaraan">
                        <option value="">Jenis Kendaraan</option>
                        <option value="Roda 2"> Roda 2</option>
                        <option value="Roda 4"> Roda 4</option>
                    </select>
                </div>

                <div class="form-group">
                <label>Nomor Polisi</label>
                    <input type="text" id="no_polisi" name="no_polisi" class="form-control" placeholder="nomor polisi">
                </div>
                <div class="form-group">
                <label>Nomor Mesin</label>
                    <input type="text" id="no_mesin" name="no_mesin" class="form-control" placeholder="nomor mesin">
                </div>
                <div class="form-group">
                <label>Nomor Rangka</label>
                    <input type="text" id="no_rangka" name="no_rangka" class="form-control" placeholder="nomor rangka">
                </div>
                <div class="form-group">
                <label>Tahun</label>
                    <input type="text" id="tahun" name="tahun" class="form-control" placeholder="tahun">
                </div>
                <div class="form-group">
                <label>Harga Perolehan</label>
                    <input type="text" id="harga_perolehan" name="harga_perolehan" class="form-control"
                        placeholder="harga_perolehan">
                </div>
                <div class="form-group">
                <label>Sumber dana</label>
                    <select class="form-control select2" style="width : 100%;" name="sumber_dana" id="sumber_dana"
                        placeholder="Sumber Dana">
                        <option value="">Sumber Dana</option>
                        <option value="APBD"> APBD</option>
                        <option value="APBN"> APBN</option>
                        <option value="-"> - </option>
                    </select>
                </div>

                <div class="form-group">
                <label>Keterangan</label>
                    <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="keterangan">
                </div>

                <div class="form-group">
                <label>Upload Foto Fisik Kendaraan</label>
                    <input type="file" id="foto_fisik" name="foto_fisik" class="form-control" placeholder="foto fisik">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.content -->
@endsection