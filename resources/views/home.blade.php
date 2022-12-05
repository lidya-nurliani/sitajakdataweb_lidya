@extends('layouts.app')

@section('css')
@endsection

@section('js')
<script src="{{ asset('AdminLte/plugins/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('adminLte/dist/js/demo.js') }}"></script>

<script>
$(function(){

//get the line chart canvas
var ctx = $("#lineChart");

//line chart data
var data = {
  labels: ["2022", "2023", "2024", "2025", "2026"],
  datasets: [
    {
      label: "Roda 2",
      data: [2, 15, 20, 1, 4],
      backgroundColor: "blue",
      borderColor: "lightblue",
      fill: false,
      lineTension: 0,
      radius: 5
    },
    {
      label: "Roda 4",
      data: [0, 5, 12, 1, 2],
      backgroundColor: "green",
      borderColor: "lightgreen",
      fill: false,
      lineTension: 0,
      radius: 5
    }
  ]
};

//options
var options = {
  responsive: true,
  legend: {
    display: true,
    position: "bottom",
    labels: {
      fontColor: "#333",
      fontSize: 16
    }
  }
};

//create Chart class object
var chart = new Chart(ctx, {
  type: "line",
  data: data,
  options: options
});
});
</script>
@endsection

 <!-- music  -->
<audio hidden autoplay loop> 
    <source src="{{ asset('AdminLte/dist/img/marspajak.mp3')}}" type="audio/mpeg">
</audio>

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-14">
                <center>
                    <h1 class="m-0">Welcome, Sistem Informasi Data Pajak Kendaraan Dinas Pangan, Tanaman
                        Pangan & Holtikultura Provinsi Kalimantan Timur</h1>
                </center>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<!-- /.content-header -->
<section class="content">
    <div class="row">

        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-dark">
                <div class="inner">
                    <span class="info-box-number">
                        <h3 align="center">{{$dafken}}</h3>
                    </span>
                    <p align="center">Daftar Kendaraan Roda 2 & 4</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"> </i>
                </div>
                <a href="index-dafken" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-dark">
                <div class="inner">
                    <span class="info-box-number">
                        <h3 align="center">{{$bayarpajak}}</h3>
                    </span>
                    <p align="center">Data Pembayar Pajak Selesai</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="index-bayarpajak" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">

            <div class="small-box bg-dark">
                <div class="inner">
                    <span class="info-box-number">
                        <h3 align="center">{{$blmbayar}}</h3>
                    </span>
                    <p align="center">data Pembayar Pajak selanjutnya</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="index-blmbayar" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">

            <div class="small-box bg-dark">
                <div class="inner">
                    <span class="info-box-number">
                        <h3 align="center">{{$suratkuasa}}</h3>
                    </span>
                    <p align="center">Pembuatan Surat Kuasa</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="index-suratkuasa" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Data Perbaruan Plat Kendaraan Roda 2 dan 4</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="lineChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ./wrapper -->
@endsection