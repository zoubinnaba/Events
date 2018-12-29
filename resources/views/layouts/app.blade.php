<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Eventbrote</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{ ('/css/app.css') }}">
	<link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	@include('layouts.partials._nav')
	<div class="container">
		@if(session()->has('notification.message'))
			<div class="alert alert-{{ session('notification.type') }}">
				{{ session('notification.message') }}
			</div>
		@endif
		@yield('content')
	</div>
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="{{ asset('/js/app.js') }}"></script>
	<script src="{{ asset('/js/larails.js') }}"></script>	

	@include('flashy::message')
	
</body>
</html>