<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} - Dashboard</title>
    <link href="{{ asset('assets/backend/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/css/datepicker3.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/feature.css') }}" rel="stylesheet">
    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">
<!--[if lt IE 9]>
	<script defer src="{{ asset('assets/backend/js/html5shiv.js') }}"></script>
	<script defer src="{{ asset('assets/backend/js/respond.min.js') }}"></script>
	<![endif]-->

    <script defer src="{{ asset('js/script.js') }}" ></script>
</head>
<body>

@yield('top_sidebar')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    @yield('content')
</div>    <!--/.main-->

<script src="{{ asset('assets/backend/js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/chart.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/chart-data.js') }}"></script>
<script src="{{ asset('assets/backend/js/easypiechart.js') }}"></script>
<script src="{{ asset('assets/backend/js/easypiechart-data.js') }}"></script>
<script src="{{ asset('assets/backend/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('assets/backend/js/custom.js') }}"></script>

<script src="{{ asset("assets/backend/datatables/jquery.dataTables.min.js")}}"></script>
<script src="{{ asset("assets/backend/datatables/dataTables.bootstrap4.min.js")}}"></script>

<script src="{{ asset('assets/backend/js/toastr.min.js') }}"></script>
<script>
   /* window.onload = function () {
        var chart1 = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(chart1).Line(lineChartData, {
            responsive: true,
            scaleLineColor: "rgba(0,0,0,.2)",
            scaleGridLineColor: "rgba(0,0,0,.05)",
            scaleFontColor: "#c5c7cc"
        });
    };*/
</script>
@yield('script')
</body>
</html>
