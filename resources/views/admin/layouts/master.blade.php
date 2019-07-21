<!DOCTYPE html>
<html lang="en">

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
        <link href="{{ asset('css/admin-style.css') }}" rel="stylesheet">
	</head>

<body>
    <div id="app">
        <!--Header section start-->
        @include('admin.partials._header')
        <!--Header section end-->
        @include('admin.partials._sidebar')
        <!--end sidebar section-->
        <div class="content-wrapper">
            <div class="container-fluid">
                @yield('content')
            </div>
            <footer class="footer">Copyright &copy; {{ date('Y') }} <a href="https://www.madcoderz.com/" target="_blank">madCoderz</a>.<span class="d-none d-sm-inline-block">All rights reserved.</span></footer>
        </div>
    </div>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/all.js') }}"></script>
    <script src="{{ asset('js/admin-script.js') }}"></script>
    <!--script-->
</body>

</html>
