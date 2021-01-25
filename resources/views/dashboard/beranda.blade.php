@extends('dashboard.index')

@section('judul_halaman', 'Beranda')

@section('konten')
          <div class="panel panel-headline">
            <div class="panel-heading">
                <h3 class="panel-title">E-Voting | Dashboard</h3>
                <p class="panel-subtitle">Periode : 2019-2020</p>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                        <div class="card card-statistics">
                            <div class="card-body">
                                <div class="clearfix">
                                    <div class="float-left">
                                        <i style="font-size: 5em" class="fa fa-user text-danger fa-sm"></i>
                                        {{-- <span class="icon"><i style="font-size: 7em" class="fa fa-user fa-sm" ></i></span> --}}
                                    </div>
                                    <div class="float-right">
                                        <p class="mb-0 text-right">Kandidat</p>
                                        <div class="fluid-container">
                                            <h3 class="font-weight-medium text-right mb-0">6</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                        <div class="card card-statistics">
                            <div class="card-body">
                                <div class="clearfix">
                                    <div class="float-left">
                                        <i style="font-size: 5em" class="fa fa-volume-up text-danger fa-sm"></i>
                                        {{-- <span class="icon"><i style="font-size: 7em" class="fa fa-user fa-sm" ></i></span> --}}
                                    </div>
                                    <div class="float-right">
                                        <p class="mb-0 text-right">Hak Suara</p>
                                        <div class="fluid-container">
                                            <h3 class="font-weight-medium text-right mb-0">66</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                        <div class="card card-statistics">
                            <div class="card-body">
                                <div class="clearfix">
                                    <div class="float-left">
                                        <i style="font-size: 5em" class="fa fa-reply text-danger fa-sm"></i>
                                        {{-- <span class="icon"><i style="font-size: 7em" class="fa fa-user fa-sm" ></i></span> --}}
                                    </div>
                                    <div class="float-right">
                                        <p class="mb-0 text-right">Suara Masuk</p>
                                        <div class="fluid-container">
                                            <h3 class="font-weight-medium text-right mb-0">666</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                        <div class="card card-statistics">
                            <div class="card-body">
                                <div class="clearfix">
                                    <div class="float-left">
                                        <a href=""><i style="font-size: 5em" class="fa fa-refresh text-danger fa-sm"></i></a>
                                    </div>
                                    <div class="float-right">
                                        <p class="mb-3 text-right"></p>
                                        <div class="fluid-container">
                                            <a href=""><h3 class="font-weight-medium text-right mb-0">Refresh</h3></a>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title" style="text-align: center">Hasil Voting</h4>
                        <canvas id="chartHasil" style="width: 15% !important;"></canvas>   
                      </div>
                    </div>
                </div>
            </div>
          </div>

@endsection

@section('chart')
<script src="{{ asset('assets/js/shared/chart.js')}}"></script>
<script type="text/javascript">

// Create the chart
var ctx = document.getElementById('chartHasil').getContext('2d');

var myChart = new Chart(ctx, {
 //chart akan ditampilkan sebagai bar chart
    type: 'bar',
    data: {
     //membuat label chart
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: 'Hasil Chart',
            //isi chart
            data: [6, 66, 666, 6666, 66666, 666666],
            //membuat warna pada bar chart
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
@endsection