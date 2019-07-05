<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/custom.css') }}" rel="stylesheet">

</head>

<body class="wrapper-login">
    <div class="container">
        <div id="app">
            @yield('content')
        </div>
    </div>
    <!-- Placed at the end of the document so the pages load faster -->
<script src="{{ mix('js/app.js') }}"></script>
    <!--Plugin-->

</body>

</html>
