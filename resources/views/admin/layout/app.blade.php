<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Infinitbility Admin</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.ico') }}"/>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

         <!-- Scripts -->
        <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
        <!-- Fonts -->
        <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

        <!-- Styles -->
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <!-- Icons -->
        <link rel="stylesheet" href="{{ asset('css/nucleo.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" type="text/css">
        <!-- Argon CSS -->
        <link rel="stylesheet" href="{{ asset('css/argon.css') }}" type="text/css">
        <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

    </head>
<body>
    @yield('content', View::make($viewName, compact($veriables)))
</body>
    <!--===============================================================================================-->
	    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/argon.js') }}"></script>
        <script src="{{ asset('js/js.cookie.js') }}"></script>
</html>