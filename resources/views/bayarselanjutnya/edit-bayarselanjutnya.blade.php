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
    <form action="{{ url('update-bayarselanjutnya', $bayarselanjutnya->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label>Pilih Bidang</label>
            <select id="unit_kerja" name="unit_kerja" class="form-control" placeholder="Unit kerja"
                value="{{ $bayarselanjutnya->unit_kerja }}">
                <option value="">Unit kerja/bidang</option>
                <option value="Sekretariat"> Sekretariat</option>
                <option value="Bidang TP"> Bidang TP</option>
                <option value="Bidang Hortik"> Bidang Hortik</option>
                <option value="Bidang KKP"> Bidang KKP</option>
                <option value="Bidang KDP"> Bidang KDP</option>
                <option value="UPTD Balai Benih Induk Tanaman Pangan dan holtikultura"> UPTD Balai Benih Induk
                            Tanaman Pangan dan holtikultura </option>
                        <option value="UPTD Pengawasan dan Sertifikat Benih Tanaman Pangan dan Holtikultura"> UPTD
                            Pengawasan dan Sertifikat Benih Tanaman Pangan dan Holtikultura </option>
                        <option value="UPTD Proteksi Tanaman Pangan dan Holtikultura"> UPTD Proteksi Tanaman Pangan dan
                            Holtikultura </option>
                        <option value="UPTD Balai Penyusunan Pengembangan Sumber Daya Manusia"> UPTD Balai Penyusunan
                            Pengembangan Sumber Daya Manusia </option>
            </select>
        </div>
        <div class="form-group">
        <label>Data kendaraan</label>
            <select class="form-control select2" style="width: 100%;" name="dafken_id" id="dafken_id">
                <option value="">daftar kendaraan</option>
                @foreach ($dafken as $item)
                <option value="{{ $item ['id'] }}"
                    {{ $item ['id']==$bayarselanjutnya->dafken_id ? 'selected="selected"' : '' }}>
                    {{ $item->no_polisi."(".$item->jenis_kendaraan.") - ".$item->nama_pemegang }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
        <label>Tanggal bayar selanjutnya</label>
            <input type="date" id="tgl_bayar_selanjutnya" name="tgl_bayar_selanjutnya" class="form-control"
                placeholder="tgl bayar" value="{{ $bayarselanjutnya->tgl_bayar }}">
        </div>

        <div class="form-group">
        <label>Status Pemegang</label>
            <select class="form-control select2" style="width : 100%;" name="pemegang" id="pemegang"
                placeholder="Pemegang">
                <option value=""> Pemegang</option>
                <option value="Aktif"> Aktif</option>
                <option value="Pasif"> Pasif</option>
            </select>
        </div>
        <div class="form-group">
        <label>Keterangan</label>
            <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="keterangan"
                value="{{ $bayarselanjutnya->keterangan }}">
        </div>

        <div class="form-group">
        <label>Upload File STNK/BPKB</label>
            <input type="file" id="foto_stnk" name="foto_stnk" class="form-control" placeholder="foto stnk"
                value="{{ $bayarselanjutnya->foto_stnk }}">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Ubah Data</button>
        </div>
    </form>
</div>
@endsection