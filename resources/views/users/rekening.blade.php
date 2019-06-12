<!doctype html>
<html lang="en">

<head>
	<title>Dashboard | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/font-awesome/css/all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/vendor/linearicons/style.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/vendor/chartist/css/chartist-custom.css') }}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicon.png') }}">
</head>

    @include('users.templates.nav')

<body>
    <div class="main-content">
        <div class="container-clearfix">
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="body">
                            <h2 align="center">Data Pembayaran Donasi Anda</h2>
                            <h3 align="center">Al Azhar Peduli</h3>
                            <hr style="border-top:3px solid #646e82; width: 35%;">
                            <br>
                            <h4 align="center">Atas Nama : </h4>
                            <br>
                            <h4 align="center">No Rekening : </h4>
                            <br>
                            <h4 align="center">Nominal : </h4>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Javascript -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/scripts/klorofil-common.js') }}"></script>
</body>
</html>
    

