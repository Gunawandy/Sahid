<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
	@section("title-website")
		Sistem Penjualan Game
	@show
	</title>
	@section("head")
	<script type="text/javascript" src="{{ asset('sahid-template/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('sahid-template/bootstrap/js/bootstrap.min.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('sahid-template/bootstrap/css/bootstrap.min.css') }}">
	@show
	<style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      border-radius: 0;
    }
    </style>
</head>
<body>

	<div class="container">
		@section("header")
			<center><h1>Sistem Penjualan Game</h1></center>
		@show
	</div>

	@section("navigation")
		@include("SahidTemplate::nav")
	@show

	<div class="container">
		@section("layout")
		
		@show
	</div>

	<div class="container">
		<div class="text-center">
			@section("footer")
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
				Copyright &copy; {{ date("Y") }} by Nor Sahid. All Right Reserved.
			@show	
		</div>
	</div>
</body>
</html>

