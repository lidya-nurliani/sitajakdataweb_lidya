@extends('layouts.app')

@section('title','Input Surat Kuasa')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"> Pengisian data untuk pembuatan Surat kuasa</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
            <h1>masukkan data</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('simpan-suratkuasa') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                <label>Pilih Data Kendaraan</label>
                    <select class="form-control select2" style="width : 100%;" name="dafken_id" id="dafken_id">
                        <option value=""> Daftar Kendaraan</option>
                        @foreach ($dafken as $item)
                        <option value="{{ $item->id }}">
                            {{ $item->no_polisi."(".$item->jenis_kendaraan.") - ".$item->nama_pemegang }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection