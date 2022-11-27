@extends('layouts.app')

@section('title','Pembayaran Pajak & STNK')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">data pembayar Selanjutnya</h1>
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
            <form action="{{ route('simpan-blmbayar') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <select class="form-control select2" style="width : 100%;" name="unit_kerja" id="unit_kerja"
                        placeholder="Unit kerja">
                        <option value=""> Unit Kerja/Bidang</option>
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
                    <select class="form-control select2" style="width : 100%;" name="dafken_id" id="dafken_id">
                        <option value=""> Daftar Kendaraan</option>
                        @foreach ($dafken as $item)
                        <option value="{{ $item->id }}">
                            {{ $item->no_polisi."(".$item->jenis_kendaraan.") - ".$item->nama_pemegang }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Tanggal Bayar selanjutnya</label>
                    <input type="date" id="tgl_bayar_selanjutnya" name="tgl_bayar_selanjutnya" class="form-control"
                        placeholder="tgl bayar">
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
                    <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="keterangan">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection