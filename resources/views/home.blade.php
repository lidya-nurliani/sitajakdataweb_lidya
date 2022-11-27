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
  labels: ["Januari", "Februari", "Maret", "April", "Mei"],
  datasets: [
    {
      label: "Roda 2",
      data: [10, 50, 25, 70, 40],
      backgroundColor: "blue",
      borderColor: "lightblue",
      fill: false,
      lineTension: 0,
      radius: 5
    },
    {
      label: "Roda 4",
      data: [20, 35, 40, 60, 50],
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
                <a href="index-dafken" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
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
                <a href="index-bayarpajak" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
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
                        <h3 class="card-title">Frekuensi Pembayaran Pajak Kendaraan Perbulan</h3>
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
<div class="card card-primary card-outline">
    <div class="card-body">
        <h1 class="card-title"><b>Apa itu Pajak Kendaraan Bemotor ? </b></h1>
        <center>
            <img src="AdminLte/dist/img/pajak.jpg" height="50%" width="100%" class="">
        </center>
        <p class="card-text">
            <p> <b> definisi Pajak </b> </p>
            Jenis pajak yang diterapkan di Negara Republik Indonesia dibagi menjadi dua jenis yaitu: (i)
            Pajak Pusat; dan (ii) Pajak Daerah. Berdasarkan Pasal 1 angka 10 UNDANG-UNDANG REPUBLIK
            INDONESIA NOMOR 28 TAHUN 2009 Tentang Pajak Daerah dan Retribusi Daerah, definisi Pajak Daerah
            adalah kontribusi wajib kepada daerah yang terutang oleh orang pribadi atau badan yang bersifat
            memaksa berdasarkan Undang-undang, dengan tidak mendapatkan imbalan secara langsung dan
            digunakan untuk keperluan daerah bagi sebesar-besarnya kemakmuran rakyat.

            Jenis Pajak sebagaimana dimaksud dapat tidak dipungut apabila potensinya kurang memadai dan/atau
            disesuaikan dengan kebijakan Daerah yang ditetapkan dengan Peraturan Daerah. Pajak Daerah, yang
            selanjutnya disebut Pajak, adalah kontribusi wajib kepada Daerah yang terutang oleh orang
            pribadi atau badan yang bersifat memaksa berdasarkan Undang-Undang, dengan tidak mendapatkan
            imbalan secara langsung dan digunakan untuk keperluan Daerah bagi sebesar-besarnya kemakmuran
            rakyat.
            <p>
                <p>
                    <p> <b> Pajak Kendaraan Bermotor</b> </p>
                    Adapun Pajak Kendaraan Bermotor termasuk ke dalam jenis pajak provinsi yang merupakan
                    bagian dari Pajak Daerah. Lebih lanjut, Pajak Kendaraan Bermotor sebagaimana yang
                    didefinisikan dalam Pasal 1 angka 12 dan 13 UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 28
                    TAHUN 2009 adalah pajak atas kepemilikan dan/atau penguasaan kendaraan bermotor. Dalam
                    pelaksanaan pemungutannya dilakukan di kantor bersama samsat. Kantor Bersama SAMSAT ini
                    melibatkan tiga instansi pemerintah, yaitu: Badan Pendapatan Daerah, Kepolisian Daerah
                    Republik Indonesia, dan PT. (Persero) Asuransi Kerugian Jasa Raharja.
                </p>
            </p>
        </p>
    </div>
</div>
<!-- ./wrapper -->
@endsection