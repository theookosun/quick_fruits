<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quick Fruits</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/login_stylesheet.css">
  <link rel="shortcut icon" href="images/list-melon.png" />
</head>
<body>
  <nav class="navbar navbar-default" role="navigation" style="z-index: 1">
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
        <li><a href="index.html">home</a></li>
        <li><a href="#">About QuickFruits</a></li>
        <li class="hidden-xs"><a style="color: #f8f8f8">Picture position</a></li>
        <li><a href="index.html#contact">Contact</a></li>
        @if(Auth::check())
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
          <ul class="dropdown-menu">
            
            <li><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li><a href="{{route('logout')}}">Logout</a></li>
             @else
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">ACCOUNT <b class="caret"></b></a>
          <ul class="dropdown-menu">
         
          <li><a href="{{route('dashboard')}}">Register</a></li>
            <li><a href="{{route('logout')}}">Login</a></li>
         
          </ul>
           
        </li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </nav>

  <div style="position: absolute; top: 10px; z-index: 1;left: 47.5%;">
        <img src="images/logo.png" class="img-responsive" width="20%" height="20%">
  </div>

  <div class="container">
    <div class="checkout">
      <div class="checkout-head">
        <h3>Fields with * are required OR <a href="{{route('login')}}">click to login</a></h3>
      </div>
      <div class="row">
        <div class="col-sm-6 line">
          <div class="login">
         
           <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
        
            @foreach($user_details as $userd)
              <input type="text" name="email" class="form-control" placeholder="Email" value="{{Auth::user()->email}}">
              <input type="text" name="" class="form-control" value="{{Auth::user()->name}}" placeholder="Full Name *" required>
              <input type="text" name="" class="form-control" value="{{$userd->phone_number}}" placeholder="Phone Number *" required>
              <input type="text" name="" class="form-control" value="{{$userd->delivery_address}}" placeholder="Address *" required>
              <input type="text" name="" class="form-control" placeholder="Closest Landmark *" required>
              <input type="submit" value="Check Out Now" name="submit" class="btn btn-block btn-primary">  
              <input type="hidden" name="orderID" value="345">
              <input type="hidden" name="plan"  @if ($formData['fname'] == 37800) value="PLN_pzfo23z1v4rzp9j" @elseif($formData['fname'] == 21000) value="PLN_0lqhfzitif3szqz" @elseif($formData['fname'] == 7000) value="PLN_g2px14k4njhm6h7" @elseif($formData['fname'] == 10000) value="PLN_nlfswp55b6jmgej" @elseif($formData['fname'] == 30000) value="PLN_yasi9pkxhkju451" @elseif($formData['fname'] == 54800) value="PLN_xjnp4q9fh1zmjrd" @elseif($formData['fname'] == 12000) value="PLN_7ftj45q4r9du4vf" @elseif($formData['fname'] == 36000) value="PLN_k8ufgzdbowyi6lb" @elseif($formData['fname'] == 65000) value="PLN_mdpb7yuztv5112t" @elseif($formData['fname'] == 15000) value="PLN_twgmhncro4ip34p" @elseif($formData['fname'] == 45000) value="PLN_gpchkx1dk7d9zbd" @elseif($formData['fname'] == 81000) value="PLN_6flr9gybske3yg3" @endif> {{-- required in kobo --}}
              <input type="hidden" name="quantity" value="3">
              @endforeach
             <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
             <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
             {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
 
              <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
           
            </form>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="line-2">
          <div class="social-login">
            <h4>Sign up with your social account</h4>
            <p>We will not post on your behalf, promise!</p>
            <button href="" type="button" class="btn social-login-button">Facebook</button>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>

<div class="stop">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <p>Navigations</p>
        <ul id="image">
          <li>Home</li>
          <li>Login</li>
          <li>My Account</li>
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
