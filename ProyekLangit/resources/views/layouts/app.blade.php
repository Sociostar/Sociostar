<!DOCTYPE html>
  <html lang="{{ app()->getLocale() }}">
    <head>
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{ config('app.name', 'Laravel') }}</title>

      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
      <style media="screen">
        .bg-auth{
          background: url('{{asset('img/material.png')}}');
          /* Full height */
          height: 100%;

          /* Center and scale the image nicely */
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
        }
      </style>
      @stack('css')
    </head>

    <body>
      @guest
        @include('layouts.navbar')
      @endguest
      @auth
        @if (Auth::user()->type == 1)
          @include('layouts.navbar-user')
        @elseif (Auth::user()->type == 2)
          @include('layouts.navbar-fp')
        @elseif (Auth::user()->type == 3)
          @include('layouts.navbar-ngo')
        @else
          @include('layouts.navbar-admin')
        @endif
      @endauth
      @yield('content')
      @include('layouts.footer')
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
      <script type="text/javascript">
        $(".button-collapse").sideNav();
        $(".dropdown-button").dropdown();
      </script>
      @stack('js')
    </body>
  </html>
