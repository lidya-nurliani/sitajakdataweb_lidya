@extends('layouts.app')

@section('title','Perbaruan Plat')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">data Nopol Kendaraan</h1>
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
            <form action="{{ route('simpan-perbaruanplat') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                <label>Data Kendaraan</label>
                    <select class="form-control select2" style="width : 100%;" name="dafken_id" id="dafken_id">
                        <option value=""> Data Kendaraan</option>
                        @foreach ($dafken as $item)
                        <option value="{{ $item->id }}">
                            {{ $item->no_polisi."(".$item->tahun.") - ".$item->nama_pemegang }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                <label>Pergantian plat / kali</label>
                    <input type="text" id="pergantian_plat" name="pergantian_plat" class="form-control"
                        placeholder="pergantian plat">
                </div>
                <div class="form-group">
                <label>Masa Berganti</label>
                    <input type="text" id="masa_berganti" name="masa_berganti" class="form-control"
                        placeholder="masa berganti">
                </div>
                <div class="form-group">
                <label>Status</label>
                    <select class="form-control select2" style="width : 100%;" name="status" id="status"
                        placeholder="Status">
                        <option value=""> Status</option>
                        <option value="sudah berganti"> sudah berganti</option>
                        <option value="belum berganti"> belum berganti</option>
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