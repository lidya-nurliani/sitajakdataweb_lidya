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
        labels: [
            @foreach($statsRoda2 as $item)
                "{{ $item->bulan }}",
            @endforeach
        ],
        datasets: [
        {
            label: "Roda 2",
            data: [
                @foreach($statsRoda2 as $item)
                    {{ $item->total }},
                @endforeach
            ],
            backgroundColor: "blue",
            borderColor: "lightblue",
            fill: false,
            lineTension: 0,
            radius: 5
        },
        {
            label: "Roda 4",
            data: [
                @foreach($statsRoda4 as $item)
                    {{ $item->total }},
                @endforeach
            ],
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
    
    //-------------
      //- DONUT CHART -
      //-------------
      // Get context with jQuery - using jQuery's .get() method.
    var donutData = {
        labels: [
            'Roda 2',
            'Roda 4'
        ],
        datasets: [{
            data: [{{ $jmlR2 }}, {{ $jmlR4 }}],
            backgroundColor: ['#f56954', '#00a65a'],
        }]
    }

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#jnsKendaraan').get(0).getContext('2d')
    var pieData = donutData;
    var pieOptions = {
    maintainAspectRatio: false,
    responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas, {
    type: 'pie',
    data: pieData,
    options: pieOptions
    })
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
            <div class="small-box bg-blue">
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
            <div class="small-box bg-blue">
                <div class="inner">
                    <span class="info-box-number">
                        <h3 align="center">{{$blmlunas}}</h3>
                    </span>
                    <p align="center">Data Pembayar Pajak belum lunas</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="index-blmlunas" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">

            <div class="small-box bg-blue">
                <div class="inner">
                    <span class="info-box-number">
                        <h3 align="center">{{$bayarselanjutnya}}</h3>
                    </span>
                    <p align="center">data Pembayar Pajak selanjutnya</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="index-bayarselanjutnya" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">

            <div class="small-box bg-blue">
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
            <div class="col-md-6">
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
                            <canvas id="lineChart" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Jenis Kendaraan</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                    <canvas id="jnsKendaraan" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ./wrapper -->
@endsection