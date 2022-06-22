<x-app-layout title="Dashboard PLN">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row Card -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route('place.loaLepu') }}" class="text-decoration-none">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                    Loa Lepu
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-map-marked-alt fa-2x text-gray-300"></i>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="font-weight-bold text-gray-800">Flowrate : <span id="flowrate1"></span></div>
                        </div>
                        <div class="row">
                            <div class="font-weight-bold text-gray-800">Velocity &nbsp;: <span id="velocity1"></span></div>
                        </div>
                        <div class="row">
                            <div class="font-weight-bold text-gray-800">Totalizer : <span id="totalizer1"></span></div>
                        </div>
                        <div class="row">
                            <div class="font-weight-bold text-gray-800">Time : <span id="jam1"></span></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route('place.loaLepu') }}" class="text-decoration-none">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-sm font-weight-bold text-success text-uppercase mb-1">
                                    Ipa 1 Sukarame</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-map-marked-alt fa-2x text-gray-300"></i>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="font-weight-bold text-gray-800">Flowrate : <span id="flowrate2"></span></div>
                        </div>
                        <div class="row">
                            <div class="font-weight-bold text-gray-800">Velocity &nbsp;: <span id="velocity2"></span></div>
                        </div>
                        <div class="row">
                            <div class="font-weight-bold text-gray-800">Totalizer : <span id="totalizer2"></span></div>
                        </div>
                        <div class="row">
                            <div class="font-weight-bold text-gray-800">Time : <span id="jam2"></span></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route('place.loaLepu') }}" class="text-decoration-none">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-sm font-weight-bold text-warning text-uppercase mb-1">
                                    Ipa 2 Bukit Biru</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-map-marked-alt fa-2x text-gray-300"></i>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="font-weight-bold text-gray-800">Flowrate : <span id="flowrate3"></span></div>
                        </div>
                        <div class="row">
                            <div class="font-weight-bold text-gray-800">Velocity &nbsp;: <span id="velocity3"></span></div>
                        </div>
                        <div class="row">
                            <div class="font-weight-bold text-gray-800">Totalizer : <span id="totalizer3"></span></div>
                        </div>
                        <div class="row">
                            <div class="font-weight-bold text-gray-800">Time : <span id="jam3"></span></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route('place.loaLepu') }}" class="text-decoration-none">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-sm font-weight-bold text-warning text-uppercase mb-1">
                                    Ipa Loa Kulu</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-map-marked-alt fa-2x text-gray-300"></i>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="font-weight-bold text-gray-800">Flowrate : <span id="flowrate4"></span></div>
                        </div>
                        <div class="row">
                            <div class="font-weight-bold text-gray-800">Velocity &nbsp;: <span id="velocity4"></span></div>
                        </div>
                        <div class="row">
                            <div class="font-weight-bold text-gray-800">Totalizer : <span id="totalizer4"></span></div>
                        </div>
                        <div class="row">
                            <div class="font-weight-bold text-gray-800">Time : <span id="jam4"></span></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route('place.loaLepu') }}" class="text-decoration-none">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-sm font-weight-bold text-danger text-uppercase mb-1">
                                    Ipa Bakungan</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-map-marked-alt fa-2x text-gray-300"></i>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="font-weight-bold text-gray-800">Flowrate : <span id="flowrate5"></span></div>
                        </div>
                        <div class="row">
                            <div class="font-weight-bold text-gray-800">Velocity &nbsp;: <span id="velocity5"></span></div>
                        </div>
                        <div class="row">
                            <div class="font-weight-bold text-gray-800">Totalizer : <span id="totalizer5"></span></div>
                        </div>
                        <div class="row">
                            <div class="font-weight-bold text-gray-800">Time : <span id="jam5"></span></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route('place.loaLepu') }}" class="text-decoration-none">
                <div class="card border-left-dark shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-sm font-weight-bold text-dark text-uppercase mb-1">
                                    Ipa Loa Janan</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-map-marked-alt fa-2x text-gray-300"></i>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="font-weight-bold text-gray-800">Flowrate : <span id="flowrate6"></span></div>
                        </div>
                        <div class="row">
                            <div class="font-weight-bold text-gray-800">Velocity &nbsp;: <span id="velocity6"></span></div>
                        </div>
                        <div class="row">
                            <div class="font-weight-bold text-gray-800">Totalizer : <span id="totalizer6"></span></div>
                        </div>
                        <div class="row">
                            <div class="font-weight-bold text-gray-800">Time : <span id="jam6"></span></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route('place.loaLepu') }}" class="text-decoration-none">
                <div class="card border-left-secondary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-sm font-weight-bold text-secondary text-uppercase mb-1">
                                    Bekotok</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-map-marked-alt fa-2x text-gray-300"></i>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="font-weight-bold text-gray-800">Flowrate : <span id="flowrate7"></span></div>
                        </div>
                        <div class="row">
                            <div class="font-weight-bold text-gray-800">Velocity &nbsp;: <span id="velocity7"></span></div>
                        </div>
                        <div class="row">
                            <div class="font-weight-bold text-gray-800">Totalizer : <span id="totalizer7"></span></div>
                        </div>
                        <div class="row">
                            <div class="font-weight-bold text-gray-800">Time : <span id="jam7"></span></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    @push('js-costum')
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

                console.log(jso);

                document.getElementById("flowrate1").innerHTML = jso['flowrate'];
                document.getElementById("velocity1").innerHTML = jso['flowspeed'];
                document.getElementById("totalizer1").innerHTML = jso['totalizer'];
                document.getElementById("jam1").innerHTML = jam;

            // } else if (message.destinationName == "/sensor/testflow") {

            //     var jso = JSON.parse(message.payloadString);
            //     const unixTime = jso['TIME'];
            //     const date = new Date(unixTime * 1000);
            //     const jam = date.toLocaleString("id-ID");

            //     document.getElementById("flowrate").innerHTML = jso['flowrate'];
            //     document.getElementById("velocity").innerHTML = jso['flowspeed'];
            //     document.getElementById("totalizer").innerHTML = jso['totalizer'];
            //     document.getElementById("jam").innerHTML = jam;

            // } else if (message.destinationName == "/sensor/testflow") {

            //     var jso = JSON.parse(message.payloadString);
            //     const unixTime = jso['TIME'];
            //     const date = new Date(unixTime * 1000);
            //     const jam = date.toLocaleString("id-ID");

            //     document.getElementById("flowrate").innerHTML = jso['flowrate'];
            //     document.getElementById("velocity").innerHTML = jso['flowspeed'];
            //     document.getElementById("totalizer").innerHTML = jso['totalizer'];
            //     document.getElementById("jam").innerHTML = jam;

            // } else if (message.destinationName == "/sensor/testflow") {

            //     var jso = JSON.parse(message.payloadString);
            //     const unixTime = jso['TIME'];
            //     const date = new Date(unixTime * 1000);
            //     const jam = date.toLocaleString("id-ID");

            //     document.getElementById("flowrate").innerHTML = jso['flowrate'];
            //     document.getElementById("velocity").innerHTML = jso['flowspeed'];
            //     document.getElementById("totalizer").innerHTML = jso['totalizer'];
            //     document.getElementById("jam").innerHTML = jam;
            // }else if (message.destinationName == "/sensor/testflow") {

            //     var jso = JSON.parse(message.payloadString);
            //     const unixTime = jso['TIME'];
            //     const date = new Date(unixTime*1000);
            //     const jam = date.toLocaleString("id-ID");

            //     document.getElementById("flowrate").innerHTML = jso['flowrate'];
            //     document.getElementById("velocity").innerHTML = jso['flowspeed'];
            //     document.getElementById("totalizer").innerHTML = jso['totalizer'];
            //     document.getElementById("jam").innerHTML = jam;
            // }else if (message.destinationName == "/sensor/testflow") {

            //     var jso = JSON.parse(message.payloadString);
            //     const unixTime = jso['TIME'];
            //     const date = new Date(unixTime*1000);
            //     const jam = date.toLocaleString("id-ID");

            //     document.getElementById("flowrate").innerHTML = jso['flowrate'];
            //     document.getElementById("velocity").innerHTML = jso['flowspeed'];
            //     document.getElementById("totalizer").innerHTML = jso['totalizer'];
            //     document.getElementById("jam").innerHTML = jam;
            // }else if (message.destinationName == "/sensor/testflow") {

            //     var jso = JSON.parse(message.payloadString);
            //     const unixTime = jso['TIME'];
            //     const date = new Date(unixTime*1000);
            //     const jam = date.toLocaleString("id-ID");

            //     document.getElementById("flowrate").innerHTML = jso['flowrate'];
            //     document.getElementById("velocity").innerHTML = jso['flowspeed'];
            //     document.getElementById("totalizer").innerHTML = jso['totalizer'];
            //     document.getElementById("jam").innerHTML = jam;
            // }
            }
        }
    </script>
    @endpush

</x-app-layout>
