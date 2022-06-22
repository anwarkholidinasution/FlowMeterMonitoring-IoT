@dd($flowrate)
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Live Chart</title>
  </head>
  <body>
    <div class="container">
        <h1 class="text-center">Live Chart</h1>

        <div>
            <canvas id="myChart"></canvas>
        </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        // const labels = [
        //     'January',
        //     'February',
        //     'March',
        //     'April',
        //     'May',
        //     'June',
        // ];

        const data = {
          labels: [],
          datasets: [{
            label: 'My First dataset',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
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
                        console.log(param);
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

    {{-- <script>
        let flowratte = 'aku';
        cons.log(flowratte);
    </script> --}}

  </body>
</html>
