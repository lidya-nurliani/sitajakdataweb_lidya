
<!DOCTYPE html>

<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>

    <title>SitajakData</title>
    @include('Template.head')
</head>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

<link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">

<link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">

<link rel="stylesheet" href="dist/css/adminlte.min.css?v=3.2.0">

<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">

<link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

<body class="hold-transition sidebar-mini">

<div class="wrapper">

  <!-- Navbar -->
  @include('Template.navbar')
  <!-- /.navbar -->
  @include('Template.left-sidebar')
  <!-- Main Sidebar Container -->



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-14">
            <center>
            <h1 class="m-0">Welcome, Sistem Informasi Data Pajak Kendaraan Dinas Pangan, Tanaman Pangan & Holtikultura Provinsi Kalimantan Timur</h1>
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
        <span class="info-box-number"><h3 align="center">{{$dafken}}</h3></span>
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
        <span class="info-box-number"><h3 align="center">{{$bayarpajak}}</h3></span>
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
        <span class="info-box-number"><h3 align="center">{{$blmbayar}}</h3></span>
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
        <span class="info-box-number"><h3 align="center">{{$suratkuasa}}</h3></span>
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

    <div class="card card-primary card-outline">
    <style>
#chartdiv1 {
  width: 100%;
  height: 500px;
}

#chartdiv2 {
  width: 100%;
  height: 500px;
}
</style>

<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>


<h4 align="center">Data Pembayar Pajak dan STNK pada Tahun 2022</h4>
<!-- Chart code -->
<script>
am5.ready(function() {

// Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
var root = am5.Root.new("chartdiv1");

// Set themes
// https://www.amcharts.com/docs/v5/concepts/themes/
root.setThemes([
  am5themes_Animated.new(root)
]);

// Create chart
// https://www.amcharts.com/docs/v5/charts/xy-chart/
var chart = root.container.children.push(
  am5xy.XYChart.new(root, {
    panX: true,
    panY: true,
    wheelX: "panX",
    wheelY: "zoomX"
  })
);

// Add cursor
// https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
cursor.lineY.set("visible", false);

// Create axes
// https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
var xRenderer = am5xy.AxisRendererX.new(root, { minGridDistance: 30 });

var xAxis = chart.xAxes.push(
  am5xy.CategoryAxis.new(root, {
    maxDeviation: 0.3,
    categoryField: "country",
    renderer: xRenderer,
    tooltip: am5.Tooltip.new(root, {})
  })
);

var yAxis = chart.yAxes.push(
  am5xy.ValueAxis.new(root, {
    maxDeviation: 0.3,
    renderer: am5xy.AxisRendererY.new(root, {})
  })
);

// Create series
// https://www.amcharts.com/docs/v5/charts/xy-chart/series/
var series = chart.series.push(
  am5xy.ColumnSeries.new(root, {
    name: "Series 1",
    xAxis: xAxis,
    yAxis: yAxis,
    valueYField: "value",
    sequencedInterpolation: true,
    categoryXField: "country"
  })
);

series.columns.template.setAll({
  width: am5.percent(120),
  fillOpacity: 0.9,
  strokeOpacity: 0
});
series.columns.template.adapters.add("fill", (fill, target) => {
  return chart.get("colors").getIndex(series.columns.indexOf(target));
});

series.columns.template.adapters.add("stroke", (stroke, target) => {
  return chart.get("colors").getIndex(series.columns.indexOf(target));
});

series.columns.template.set("draw", function (display, target) {
  var w = target.getPrivate("width", 0);
  var h = target.getPrivate("height", 0);
  display.moveTo(0, h);
  display.bezierCurveTo(w / 4, h, w / 4, 0, w / 2, 0);
  display.bezierCurveTo(w - w / 4, 0, w - w / 4, h, w, h);
});

// Set data
var data = [{
  country: "Januari",
  value: 5
}, {
  country: "Februari",
  value: 4
}, {
  country: "Maret",
  value: 5
}, {
  country: "April",
  value: 6
}, {
  country: "Mei",
  value: 4
}, {
  country: "Juni",
  value: 4
}, {
  country: "Juli",
  value: 2
}, {
  country: "Agustus",
  value: 2
}, {
  country: "September",
  value: 6
}, {
  country: "Oktober",
  value: 4
}, {
  country: "November",
  value: 13
}, {
  country: "Desember",
  value: 13
}];


xAxis.data.setAll(data);
series.data.setAll(data);

// Make stuff animate on load
// https://www.amcharts.com/docs/v5/concepts/animations/
series.appear(1000);
chart.appear(1000, 100);

}); // end am5.ready()
</script>

<!-- HTML -->
<div id="chartdiv1"></div>

<h4 align="center">Daftar Perbaruan Nomor Polisi Kendaraan Dinas Selanjutnya (PerTahun)</h4>
<!-- Chart code -->
<script>
am5.ready(function() {

// Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
var root = am5.Root.new("chartdiv2");

// Set themes
// https://www.amcharts.com/docs/v5/concepts/themes/
root.setThemes([
  am5themes_Animated.new(root)
]);

// Create chart
// https://www.amcharts.com/docs/v5/charts/xy-chart/
var chart = root.container.children.push(
  am5xy.XYChart.new(root, {
    panX: true,
    panY: true,
    wheelX: "panX",
    wheelY: "zoomX"
  })
);

// Add cursor
// https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
cursor.lineY.set("visible", false);

// Create axes
// https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
var xRenderer = am5xy.AxisRendererX.new(root, { minGridDistance: 30 });

var xAxis = chart.xAxes.push(
  am5xy.CategoryAxis.new(root, {
    maxDeviation: 0.3,
    categoryField: "country",
    renderer: xRenderer,
    tooltip: am5.Tooltip.new(root, {})
  })
);

var yAxis = chart.yAxes.push(
  am5xy.ValueAxis.new(root, {
    maxDeviation: 0.3,
    renderer: am5xy.AxisRendererY.new(root, {})
  })
);

// Create series
// https://www.amcharts.com/docs/v5/charts/xy-chart/series/
var series = chart.series.push(
  am5xy.ColumnSeries.new(root, {
    name: "Series 1",
    xAxis: xAxis,
    yAxis: yAxis,
    valueYField: "value",
    sequencedInterpolation: true,
    categoryXField: "country"
  })
);

series.columns.template.setAll({
  width: am5.percent(120),
  fillOpacity: 0.9,
  strokeOpacity: 0
});
series.columns.template.adapters.add("fill", (fill, target) => {
  return chart.get("colors").getIndex(series.columns.indexOf(target));
});

series.columns.template.adapters.add("stroke", (stroke, target) => {
  return chart.get("colors").getIndex(series.columns.indexOf(target));
});

series.columns.template.set("draw", function (display, target) {
  var w = target.getPrivate("width", 0);
  var h = target.getPrivate("height", 0);
  display.moveTo(0, h);
  display.bezierCurveTo(w / 4, h, w / 4, 0, w / 2, 0);
  display.bezierCurveTo(w - w / 4, 0, w - w / 4, h, w, h);
});

// Set data
var data = [{
  country: "Tahun 2022",
  value: 2
}, {
  country: "Tahun 2023",
  value: 20
}, {
  country: "Tahun 2024",
  value: 32
}, {
  country: "Tahun 2025",
  value: 2
}, {
  country: "Tahun 2026",
  value: 6
}];


xAxis.data.setAll(data);
series.data.setAll(data);

// Make stuff animate on load
// https://www.amcharts.com/docs/v5/concepts/animations/
series.appear(1000);
chart.appear(1000, 100);

}); // end am5.ready()
</script>

<!-- HTML -->
<div id="chartdiv2"></div>


              <div class="card-body">
                <h1 class="card-title"><b>Apa itu Pajak Kendaraan Bemotor ? </b></h1>
                <center>
      <img src="AdminLte/dist/img/pajak.jpg" height="50%" width="100%" class="">
  </center>
  <p class="card-text">
                <p> <b> definisi Pajak </b> </p>
                Jenis pajak yang diterapkan di Negara Republik Indonesia dibagi menjadi dua jenis yaitu: (i) Pajak Pusat; dan (ii) Pajak Daerah. Berdasarkan Pasal 1 angka 10 UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 28 TAHUN 2009 Tentang Pajak Daerah dan Retribusi Daerah, definisi Pajak Daerah adalah kontribusi wajib kepada daerah yang terutang oleh orang pribadi atau badan yang bersifat memaksa berdasarkan Undang-undang, dengan tidak mendapatkan imbalan secara langsung dan digunakan untuk keperluan daerah bagi sebesar-besarnya kemakmuran rakyat.

Jenis Pajak sebagaimana dimaksud dapat tidak dipungut apabila potensinya kurang memadai dan/atau disesuaikan dengan kebijakan Daerah yang ditetapkan dengan Peraturan Daerah. Pajak Daerah, yang selanjutnya disebut Pajak, adalah kontribusi wajib kepada Daerah yang terutang oleh orang pribadi atau badan yang bersifat memaksa berdasarkan Undang-Undang, dengan tidak mendapatkan imbalan secara langsung dan digunakan untuk keperluan Daerah bagi sebesar-besarnya kemakmuran rakyat.  
   <p>
   <p>
        <p> <b> Pajak Kendaraan Bermotor</b> </p>
        Adapun Pajak Kendaraan Bermotor termasuk ke dalam jenis pajak provinsi yang merupakan bagian dari Pajak Daerah. Lebih lanjut, Pajak Kendaraan Bermotor sebagaimana yang didefinisikan dalam Pasal 1 angka 12 dan 13 UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 28 TAHUN 2009 adalah pajak atas kepemilikan dan/atau penguasaan kendaraan bermotor. Dalam pelaksanaan pemungutannya dilakukan di kantor bersama samsat. Kantor Bersama SAMSAT ini melibatkan tiga instansi pemerintah, yaitu: Badan Pendapatan Daerah, Kepolisian Daerah Republik Indonesia, dan PT. (Persero) Asuransi Kerugian Jasa Raharja.
  </p>
                </p>
                </p>
              </div>
              
   

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('Template.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('Template.script')
<!-- jQuery -->

</body>
</html>
