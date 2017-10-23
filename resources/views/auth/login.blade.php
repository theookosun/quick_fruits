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
        <li><a href="{{url('/')}}">home</a></li>
        <li><a href="#">About QuickFruits</a></li>
        <li class="hidden-xs"><a style="color: #f8f8f8">Picture position</a></li>
        <li><a href="{{url('/login#contact')}}">Contact</a></li>
        <li class="dropdown" style="z-index: 999">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="{{url('/register')}}">Register</a></li>
            
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </nav>

  <div style="position: absolute; top: 10px; z-index: 1;left: 47.5%;">
        <img src="images/logo.png" class="img-responsive" width="20%" height="20%">
  </div>

  <div class="container">
    <div class="checkout">
      <div class="checkout-head">
        <h3>Login with valid credentials</h3>
      </div>
      <div class="row">
        <div class="col-sm-6 line">
          <div class="login">
            <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email">Username/Email:</label><br>
              <input type="text" name="email" id="email" class="form-control input-lg" placeholder="Username/ Email" id="email">
                 @if ($errors->has('email'))
                     <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                 @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password">Password:</label><br>
                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" id="password"><br>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
             </div>
              <input type="submit" value="Login" name="submit" class="btn btn-block btn-primary btn-lg">            
            </form>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="line-2">
          <div class="social-login">
            <h4>Sign in with your social account</h4>
            <p>We will not post on your behalf, promise!</p>
            <button href="" type="button" class="btn social-login-button">Facebook</button>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>

<div class="stop">
  <div class="container" id="contact">
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
