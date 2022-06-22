{{-- <x-app-layout title="Dashboard PLN"> --}}
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- ini css toogle -->
    <!-- <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet"> -->

    <!-- script node js untuk menggunakan mqtt, jangan lupakan ini :v -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.min.js" type="text/javascript"></script>

</head>
<body>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<!-- Content Row Card -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        {{-- <a href="{{ route('place.loaLepu') }}" class="text-decoration-none"> --}}
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Loa Lepu
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-map-marked-alt fa-2x text-gray-300"></i>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Flowrate : <h5 id="flowrate1"></h5></div>
                </div>
                <div class="row">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Velocity : <h5 id="velocity1"></h5></div>
                </div>
                <div class="row">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Totalizer : <h5 id="totalizer1"></h5></div>
                </div>
                <div class="row">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Time : <div id="jam1"></div></div>
                </div>
            </div>
        </div>
        </a>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        {{-- <a href="{{ route('place.loaLepu') }}" class="text-decoration-none"> --}}
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            IPA 1 Sukarame
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-map-marked-alt fa-2x text-gray-300"></i>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Flowrate : <h5 id="flowrate2"></h5></div>
                </div>
                <div class="row">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Velocity : <h5 id="velocity2"></h5></div>
                </div>
                <div class="row">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Totalizer : <h5 id="totalizer2"></h5></div>
                </div>
                <div class="row">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Time : <div id="jam2"></div></div>
                </div>
            </div>
        </div>
        </a>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        {{-- <a href="{{ route('place.loaLepu') }}" class="text-decoration-none"> --}}
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            IPA 2 Bukit Biru
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-map-marked-alt fa-2x text-gray-300"></i>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Flowrate : <h5 id="flowrate3"></h5></div>
                </div>
                <div class="row">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Velocity : <h5 id="velocity3"></h5></div>
                </div>
                <div class="row">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Totalizer : <h5 id="totalizer3"></h5></div>
                </div>
                <div class="row">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Time : <div id="jam3"></div></div>
                </div>
            </div>
        </div>
        </a>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        {{-- <a href="{{ route('place.loaLepu') }}" class="text-decoration-none"> --}}
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            IPA 3 Bekotok
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-map-marked-alt fa-2x text-gray-300"></i>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Flowrate : <h5 id="flowrate4"></h5></div>
                </div>
                <div class="row">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Velocity : <h5 id="velocity4"></h5></div>
                </div>
                <div class="row">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Totalizer : <h5 id="totalizer4"></h5></div>
                </div>
                <div class="row">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Time : <div id="jam4"></div></div>
                </div>
            </div>
        </div>
        </a>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        {{-- <a href="{{ route('place.loaLepu') }}" class="text-decoration-none"> --}}
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Loa Kulu
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-map-marked-alt fa-2x text-gray-300"></i>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Flowrate : <h5 id="flowrate5"></h5></div>
                </div>
                <div class="row">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Velocity : <h5 id="velocity5"></h5></div>
                </div>
                <div class="row">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Totalizer : <h5 id="totalizer5"></h5></div>
                </div>
                <div class="row">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Time : <div id="jam5"></div></div>
                </div>
            </div>
        </div>
        </a>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        {{-- <a href="{{ route('place.loaLepu') }}" class="text-decoration-none"> --}}
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Bakungan
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-map-marked-alt fa-2x text-gray-300"></i>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Flowrate : <h5 id="flowrate6"></h5></div>
                </div>
                <div class="row">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Velocity : <h5 id="velocity6"></h5></div>
                </div>
                <div class="row">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Totalizer : <h5 id="totalizer6"></h5></div>
                </div>
                <div class="row">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Time : <div id="jam6"></div></div>
                </div>
            </div>
        </div>
        </a>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        {{-- <a href="{{ route('place.loaLepu') }}" class="text-decoration-none"> --}}
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Loa Janan
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-map-marked-alt fa-2x text-gray-300"></i>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Flowrate : <h5 id="flowrate7"></h5></div>
                </div>
                <div class="row">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Velocity : <h5 id="velocity7"></h5></div>
                </div>
                <div class="row">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Totalizer : <h5 id="totalizer7"></h5></div>
                </div>
                <div class="row">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Time : <div id="jam7"></div></div>
                </div>
            </div>
        </div>
        </a>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
crossorigin="anonymous"></script>

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
</body>
</html>
{{-- </x-app-layout> --}}
