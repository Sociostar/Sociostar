<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Login | Big Ben Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="author" content="Prakasam Mathaiyan">
  <meta name="description" content="">

  <script type="text/javascript" src="{{asset('plugins/lib/modernizr.js')}}"></script>
  <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/gif">

  <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('plugins/animate-it/animate.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/lib/cmp-bs-checkbox.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('css/lib/page-login.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/style-default.css')}}">
</head>

<body>

  <div class="container">

    <div class="animatedParent">
      <div class="row">

        <div class="col-md-6 col-sm-6 hidden-xs">

          <h3 class="sign animated flipInX">Take it all of with you and we</h3>
          <p class="small animated flipInX">Smart device and pick up every where our service.</p>

          <div class='slider'>
            <div class='slide1'></div>
            <div class='slide2'></div>
            <div class='slide3'></div>
            <div class='slide4'></div>
          </div>

          <h3 class="sign animated flipInX">One account give all service</h3>
          <p class="small animated flipInX">you can connect with us.</p>

          <ul class="list-inline social">
            <li><a href="#"><i class="fa fa-facebook hvr-buzz-out" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter hvr-buzz-out" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus hvr-buzz-out" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin hvr-buzz-out" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest-p hvr-buzz-out" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-skype hvr-buzz-out" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-wordpress hvr-buzz-out" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-vimeo hvr-buzz-out" aria-hidden="true"></i></a></li>
          </ul>
        </div>

        <div class="col-xs-12 col-md-4 col-sm-6 col-lg-4">

          <div class="blue-line sm normal"></div>

          <div class="signup-box">
            <div class="logo"><img src="{{asset('images/logo-c.svg')}}" alt="" style="height: 40px;"></div>

            <form action="{{ route('password.email') }}" method="post">
              {{ csrf_field() }}
              <div class="form-group">
                <input type="text" maxlength="20" name="email" class="form-control" placeholder="Type your email here">
                <i class="ti-email" aria-hidden="true"></i>
                @if ($errors->has('email'))
                  <small>{{ $errors->first('email') }}</small>
                @endif
              </div>
              <button href="#" type="submit" class="btn btn-primary btn-block">Send Email</button>
            </form>
          </div>
          <br>
          <div class="signup-box">
            <p class="signac animated flipInX">Don't have an account? <a href="{{ route('register') }}">Sign up</a></p>
          </div>

          <div class="blue-line lg normal"></div>
        </div>
      </div>
    </div>
  </div>  <!-- Container End -->


  <script type="text/javascript" src="{{asset('plugins/lib/jquery-2.2.4.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('plugins/lib/jquery-ui.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('plugins/bootstrap/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('plugins/animate-it/animate-it.js')}}"></script>
  <script type="text/javascript" src="{{asset('plugins/animate-it/arrow-line.js')}}"></script>
</body>
</html>
