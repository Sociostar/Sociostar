<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Karya Langit Indonesia</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/materialize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style media="screen">
      .parallax-container {
        height: 850px;
      }
      @auth
      .bg-auth{
        background: url('/images/materialdesign.jpeg');
      }
      @endauth
    </style>
    @stack('css')
</head>
<body>
  @guest
    @include('layouts.navbar')
  @else
    @include('layouts.navbar-auth')
  @endguest
  @yield('content')
  @include('layouts.footer')
    <!-- Scripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <script src="{{ asset('js/materialize.min.js') }}"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('.parallax').parallax();
        $('.slider').slider();
        $('.button-collapse').sideNav();
      });
    </script>
    @stack('js')
</body>
</html>
