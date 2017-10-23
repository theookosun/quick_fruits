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
  <div style="position: absolute; top: 10px; z-index: 1;left: 47.5%;">
        <img src="images/logo.png" class="img-responsive" width="20%" height="20%">
  </div>
 @yield('content')