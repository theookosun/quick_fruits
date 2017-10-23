<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quick Fruits</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="shortcut icon" href="images/list-melon.png" />
</head>
<body>
  <nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
     <button type="button" class="navbar-toggle collapsed" style="z-index: 9999" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{url('/')}}">home</a></li>
        <li><a href="#">About QuickFruits</a></li>
        <li class="hidden-xs" style="color: #f8f8f8"> Picture position</li>
        <li><a href="{{url('/#contact')}}">Contact</a></li>
         @if(Auth::check())
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">ACCOUNT <b class="caret"></b></a>
          <ul class="dropdown-menu">
            
            <li><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li><a href="{{route('logout')}}">Logout</a></li>
             @else
              <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">ACCOUNT <b class="caret"></b></a>
          <ul class="dropdown-menu">
         
          <li><a href="{{route('dashboard')}}">Register</a></li>
            <li><a href="{{route('login')}}">Login</a></li>
         
          </ul>
           
        </li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </nav>
  <div style="position: absolute;">
    <div data-spy="affix" data-offset-top="10">
   <a href="{{route('ondemand')}}" type="button"  class="btn on-demand-button">ON DEMAND <span class="glyphicon glyphicon-shopping-cart"></span></a>
  </div>
  </div>

 @yield('content')

 

<div class="contact">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
        <h2 class="text-center" id="contact">Contact Us</h2><br>
      <div class="col-sm-5">
      <div>
        <h4><span class="glyphicon glyphicon-map-marker"></span> Address:</h4>
        <p>Suite A54 primalTek Plaza Egbeda</p><br>
        <h4><span class="glyphicon glyphicon-envelope"></span> Email:</h4>
        <p>hello@quickfruits.com.ng</p><br>
        <h4><span class="glyphicon glyphicon-phone"></span> Tel:</h4>
        <p>234-90-6714-7447</p>
      </div>
      </div>
      <div class="col-sm-7">
        <div class="form-package">
          <form class="form-group">
          <input type="text" class="form-control input-lg" placeholder="Full Name" id="full_name">
          <input type="text" class="form-control input-lg" placeholder="Email" id="email">
          <input type="text" class="form-control input-lg" placeholder="Phone Number" id="phone_number">
          <textarea class="form-control input-lg" id="message" placeholder="Message"></textarea>
          <input type="submit" name="submit" class="btn btn-primary btn-block btn-lg" value="Submit">
        </form>
        </div>
      </div>
      </div>
    </div>
  </div>
</div> <!-- end of contact -->

<div class="stop">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <p>Navigations</p>
        <ul id="image">
          <a href="{{url('/')}}"><li>Home</li></a>
         <a href="{{url('/login')}}"> <li>Login</li></a>
         <a href="{{url('/login')}}"> <li>My Account</li></a>
          <li>Terms of Service</li>
        </ul>
      </div>
      <div class="col-sm-4">
        <div class="contact-details">
          <p>follow us</p>
          <ul id="icon">
            <li><i class="fa fa-facebook" aria-hidden="true"></i></li>
            <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
            <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
          </ul>
          <span>Email us: </span><span>hello@quickfruits.com.ng</span><br>
          <span>Tel: </span><span>234-90-6714-7447</span>
        </div>
      </div>
      <div class="col-sm-4">
        <p>send a message</p>
        <form class="form-group">
          <input type="text" class="form-control" placeholder="Full Name" id="full_name">
          <textarea class="form-control" id="message" placeholder="Message"></textarea>
          <input type="submit" name="submit" class="btn btn-primary btn-block" value="Submit">
        </form>
      </div>
    </div>
  </div>
</div>
<div class="copy">
  <div class="container">
    <p class="text-center">&copy; 2017 All Right Reserved Quick Fuits Designed by phosmobile</p>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>