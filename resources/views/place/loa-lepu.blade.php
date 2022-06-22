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
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><span id="flowrate1"></span></div>
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
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><span id="velocity1"></span></div>
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
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Totalizer</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><span id="totalizer1"></span></div>
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
            <div class="card border-left-dark shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                Time</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><span id="jam1"></span></div>
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

    <!-- script node js untuk menggunakan mqtt -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        // Create a client instance
        // ############# ATTENTION: Enter Your MQTT TLS Port and host######## Supports only TLS Port
        client = new Paho.MQTT.Client("broker.emqx.io", 8084, "web_" + parseInt(Math.random() * 100, 10));

        // set callback handlers
        client.onConnectionLost = onConnectionLost;
        client.onMessageArrived = onMessageArrived;

        //############# ATTENTION: Enter Your MQTT user and password details ########
        var options = {
            useSSL: true,
            userName: "",
            password: "",
            onSuccess: onConnect,
            onFailure: doFail
        }

        // connect the client
        client.connect(options);

        // called when the client connects
        function onConnect() {
            // Once a connection has been made, make a subscription and send a message.
            console.log("onConnect");
            client.subscribe("/sensor/testflow1");
            client.subscribe("/sensor/testflow");
            // client.query('INSERT INTO tb_iot VALUES ')
            // client.subscribe("test/dht11/humidity");
        }

        function doFail(e) {
            console.log(e);
        }

        // called when the client loses its connection
        function onConnectionLost(responseObject) {
            if (responseObject.errorCode !== 0) {
                console.log("onConnectionLost:" + responseObject.errorMessage);
            }
        }

        // called when a message arrives
        function onMessageArrived(message) {
            if (message.destinationName == "/sensor/testflow1") {

                // console.log(JSON.stringify(message.payloadString));
                var jso = JSON.parse(message.payloadString);
                const unixTime = jso['TIME'];
                const date = new Date(unixTime * 1000);
                const jam = date.toLocaleString("id-ID");

                document.getElementById("flowrate1").innerHTML = jso['flowrate'];
                document.getElementById("velocity1").innerHTML = jso['flowspeed'];
                document.getElementById("totalizer1").innerHTML = jso['totalizer'];
                document.getElementById("jam1").innerHTML = jam;
            }
        }
    </script>
    @endpush

</x-app-layout>

