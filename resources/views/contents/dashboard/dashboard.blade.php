@extends('app')
@section("head")
@include('layouts.head')
@endsection
@section("script")
@include('layouts.script')
@endsection
@section('content')
<style>
    .fa-book:hover {
        color: blue;
    }

</style>
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="../../dist/css/adminlte.min.css">
<div class="card ml-3 mt-3 mr-3 mb-0">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-info card-outline">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                        <center>
                            <h1> Dashboard</h1>
                        </center>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a>Home</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="container-fluid">
                        <!-- Small boxes (Stat box) -->
                        <div class="row">
                            <div class="col-lg-4 col-6">
                                <!-- small box -->
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h2>{{ format_berat($sampah_plastik) }}</h2>
                                        <p>Total Sampah Plastik</p>

                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-trash"></i>
                                    </div>
                                    <a href="/bobot_sampah" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6">
                                <!-- small box -->
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <h2>{{ format_berat($sampah_kertas) }}</h2>
                                        <p>Total Sampah Kertas</p>

                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-trash"></i>
                                    </div>
                                    <a href="/bobot_sampah" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6">
                                <!-- small box -->
                                <div class="small-box bg-danger">
                                    <div class="inner">
                                        <h2>{{ format_berat($sampah_kaleng) }} </h2>
                                        <p>Total Sampah Kaleng</p>

                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-trash"></i>
                                    </div>
                                    <a href="/bobot_sampah" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-info">
                                    <div class="card-header">Indikator Sampah Lantai 1</h5>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p class="text-center">
                                                    <strong>Sampah Lantai 1</strong>
                                                </p>
                                                <div class="progress-group">
                                                    <span class="progress-text">Sampah Plastik</span>
                                                    <span class="float-right"><b>{{$indikator_sampah_plastik_terbaru_lantai1_persen}}</b>/100%</span>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-primary" style="width: {{$indikator_sampah_plastik_terbaru_lantai1_persen}}%"></div>
                                                    </div>
                                                </div>
                                                <!-- /.progress-group -->

                                                <div class="progress-group">
                                                    <span class="progress-text">Sampah Kertas</span>
                                                    <span class="float-right"><b>{{$indikator_sampah_kertas_terbaru_lantai1_persen}}</b>/100%</span>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-danger" style="width: {{$indikator_sampah_kertas_terbaru_lantai1_persen}}%"></div>
                                                    </div>
                                                </div>

                                                <!-- /.progress-group -->
                                                <div class="progress-group">
                                                    <span class="progress-text">Sampah Kaleng</span>
                                                    <span class="float-right"><b>{{$indikator_sampah_kaleng_terbaru_lantai1_persen}}</b>/100%</span>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-success" style="width: {{$indikator_sampah_kaleng_terbaru_lantai1_persen}}%"></div>
                                                    </div>
                                                </div>
                                                <!-- /.progress-group -->
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- ./card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- ./col -->
                            <div class="col-md-6">
                                <div class="card card-info">
                                    <div class="card-header">Indikator Sampah Lantai 2</h5>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p class="text-center">
                                                    <strong>Sampah Lantai 2</strong>
                                                </p>
                                                <div class="progress-group">
                                                    <span class="progress-text">Sampah Plastik</span>
                                                    <span class="float-right"><b>{{$indikator_sampah_plastik_terbaru_lantai2_persen}}</b>/100%</span>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-primary" style="width: {{$indikator_sampah_plastik_terbaru_lantai2_persen}}%"></div>
                                                    </div>
                                                </div>
                                                <!-- /.progress-group -->

                                                <div class="progress-group">
                                                    <span class="progress-text">Sampah Kertas</span>
                                                    <span class="float-right"><b>{{$indikator_sampah_kertas_terbaru_lantai2_persen}}</b>/100%</span>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-danger" style="width: {{$indikator_sampah_kertas_terbaru_lantai2_persen}}%"></div>
                                                    </div>
                                                </div>

                                                <!-- /.progress-group -->
                                                <div class="progress-group">
                                                    <span class="progress-text">Sampah Kaleng</span>
                                                    <span class="float-right"><b>{{$indikator_sampah_kaleng_terbaru_lantai2_persen}}</b>/100%</span>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-success" style="width: {{$indikator_sampah_kaleng_terbaru_lantai2_persen}}%"></div>
                                                    </div>
                                                </div>
                                                <!-- /.progress-group -->
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- ./card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-12">
                                <div class="card card-info">
                                    <div class="card-header">
                                        <h3 class="card-title">Perbandingan Sampah</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                                    class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                                    class="fas fa-times"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="donutChart"
                                            style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card card-info">
                                    <div class="card-header">
                                        <h3 class="card-title">Grafik Sampah Perbulan</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                                    class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                                    class="fas fa-times"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart">
                                            <canvas id="lineChart"
                                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- jQuery Knob -->
<script src="../../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- Sparkline -->
<script src="../../plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- page script -->
<script type="text/javascript">
    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData = {
        labels: [
            'Sampah Plastik',
            'Sampah Kertas',
            'Sampah Kaleng',
        ],
        datasets: [{
            data: [{{$sampah_plastik}}, {{$sampah_kertas}}, {{$sampah_kaleng}}],
            backgroundColor: ['#00c0ef', '#00a65a', '#f56954'],
        }]
    }
    var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
        type: 'pie',
        data: donutData,
        options: donutOptions
    })

    var labels =  {{ Js::from($labels) }};

      const data = {
        labels: labels,
        datasets: [{
          label: 'Sampah Plastik',
          backgroundColor: '#00c0ef',
          borderColor: '#00c0ef',
          data:   {{ Js::from($data_sampah_plastik_bulanan) }},
        },
        {
          label: 'Sampah Kertas',
          backgroundColor: '#00a65a',
          borderColor: '#00a65a',
          data:   {{ Js::from($data_sampah_kertas_bulanan) }},
        },
        {
          label: 'Sampah Kaleng',
          backgroundColor: '#f56954',
          borderColor: '#f56954',
          data:   {{ Js::from($data_sampah_kaleng_bulanan) }},
        }
        ]
      };

      const config = {
        type: 'line',
        data: data,
        options: {
        maintainAspectRatio : false,
        responsive : true,
        legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
        }
      };

      const lineChart = new Chart(
        document.getElementById('lineChart'),
        config
      );

</script>


@endsection
