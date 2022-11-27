@extends('layouts.app')

@section('title','Update Surat Kuasa')

@section('content')
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
    <form action="{{ url('update-suratkuasa', $suratkuasa->id) }}" method="post">
        @csrf
        <div class="form-group">
            <select class="form-control select2" style="width: 100%;" name="dafken_id" id="dafken_id">
                <option value="">daftar kendaraan</option>
                @foreach ($dafken as $item)
                <option value="{{ $item ['id'] }}"
                    {{ $item ['id']==$suratkuasa->dafken_id ? 'selected="selected"' : '' }}>
                    {{ $item->no_polisi."(".$item->jenis_kendaraan.") - ".$item->nama_pemegang }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Ubah Data</button>
        </div>
    </form>
</div>
@endsection