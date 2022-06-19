<x-app-layout title="Dashboard | Place 1">
    @push('css-costum')
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{ asset('assets/calendar/css/style.css') }}">
    @endpush

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard | Loa Lepu</h1>
        <a href="{{ route('dashboard') }}" class="btn btn-primary"><i class="fas fa-arrow-circle-left fa-fw"></i> Kembali</a>
    </div>

    <!-- Content Row Card -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Flowrate</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">100</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Velocity</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">200</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Totalizer
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">300</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row Chart -->
    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-7 col-lg-6">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-5 col-lg-6">
            <div class="card shadow bg-light">
                <section class="ftco-section" style="padding: 0px 0px 20px 0px">
                    <div class="container">
                        <div class="calendar calendar-first" id="calendar_first">
                        <div class="calendar_header">
                            <button class="switch-month switch-left"> <i class="fa fa-chevron-left"></i></button>
                                <h2></h2>
                            <button class="switch-month switch-right"> <i class="fa fa-chevron-right"></i></button>
                        </div>
                        <div class="calendar_weekdays"></div>
                        <div class="calendar_content"></div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    @push('js-costum')
    {{-- Chart Real Time --}}
    <script src="{{ asset('assets/js/jquery.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>

        const data = {
          labels: [],
          datasets: [{
            label: 'Chart PDAM',
            backgroundColor: 'rgb(9, 54, 131)',
            borderColor: 'rgb(39, 115, 245)',
            data: [],
          }]
        };

        const config = {
          type: 'line',
          data: data,
          options: {}
        };

        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );


    </script>

    <script>
        $(document).ready(function(){

            var updateChart = function() {
                $.ajax({
                    url: "{{ route('api.chart') }}",
                    type: 'GET',
                    dataType: 'json',
                    success: function(param) {
                        data.labels  = param.labels;
                        data.datasets[0].data = param.data;
                        myChart.update();
                        // console.log(param);
                    },
                    error: function(param){
                        console.log(param);
                    }
                });
            }

            updateChart();
            // setInterval(() => {
            //     updateChart();
            // }, 1000);

        });
    </script>

    {{-- Calendar --}}
    <script src="{{ asset('assets/calendar/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/calendar/js/popper.js') }}"></script>
    <script src="{{ asset('assets/calendar/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/calendar/js/main.js') }}"></script>



     <!-- Page level plugins -->
    {{-- <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/js/demo/chart-pie-demo.js') }}"></script> --}}
    @endpush

</x-app-layout>

