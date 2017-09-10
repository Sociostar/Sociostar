<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="Prakasam Mathaiyan">
    <meta name="description" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!--[if IE]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="{{asset('plugins/lib/modernizr.js')}}"></script>
    <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/gif">

    <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap/bootstrap.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style-default.css')}}">
</head>

<body>

    <div class="wrapper has-footer">

        @include('layouts.header')

        @include('layouts.sidebar')

        <div class="main-container">    <!-- START: Main Container -->
          @yield('content')
        </div>  <!-- END: Main Container -->

        <footer class="footer"> <!-- START: Footer -->
            &copy; 2017 <b>Sociostar</b> Team
        </footer>   <!-- END: Footer -->

    </div>  <!-- END: wrapper -->

    <script type="text/javascript" src="{{asset('plugins/lib/jquery-2.2.4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/lib/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/bootstrap/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/lib/plugins.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/app.base.js')}}"></script>
</body>
</html>
