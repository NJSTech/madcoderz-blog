<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
        <meta name="keywords" content="">
		<meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name') }}</title>
		<!-- Favicon -->
        <link href="../assets/images/favicon.png" rel="shortcut icon">
		<!-- CSS -->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/all.css') }}" rel="stylesheet">
		<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
	</head>
	<body data-preloader="2">
			<script>window.twttr = (function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0],
					  t = window.twttr || {};
					if (d.getElementById(id)) return t;
					js = d.createElement(s);
					js.id = id;
					js.src = "https://platform.twitter.com/widgets.js";
					fjs.parentNode.insertBefore(js, fjs);
				  
					t._e = [];
					t.ready = function(f) {
					  t._e.push(f);
					};
				  
					return t;
				  }(document, "script", "twitter-wjs"));</script>
		@include('partials._header')
		<!-- Scroll to top button -->
		@yield('content')

		@include('partials._footer')

		<!-- ***** JAVASCRIPTS ***** -->
		<script src="{{ asset('js/app.js') }}"></script>
		<script src="{{ asset('js/all.js') }}"></script>
		<script src="{{ asset('js/custom.js') }}"></script>
		<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
		{!! Toastr::message() !!}
		<script>
			@if($errors->any())
			@foreach($errors->all() as $error)
			toastr.error('{{ $error }}','Error',{
				closeButton:true,
				progressBar:true,
			});
			@endforeach
			@endif
		</script>
		
	</body>

</html>