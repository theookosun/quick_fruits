<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quick Fruits</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
  <nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav">
        <li><a href="#">HOME</a></li>
        <li><a href="#">ABOUT QUICKFUITS</a></li>
        <li><a href="#">CONTACT</a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">ACCOUNT <b class="caret"></b></a>
          <ul class="dropdown-menu">
             @if(Auth::check())
            <li><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li><a href="{{route('logout')}}">Logout</a></li>
          @else
          <li><a href="{{route('dashboard')}}">Register</a></li>
            <li><a href="{{route('logout')}}">Login</a></li>
          @endif
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </nav>

<div class="selection-wrapper">
  <div class="container">
    <div class="row">
      <div class="head-text">
        <h2><span class="green">the</span> package</h2>
      </div>
      <div class="selection-content">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <div class="col-sm-6">
            <div class="center-image">
              <img src="images/coconut.png" class="img-responsive" width="85%" height="85%">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="selection-description">
              <form>
                <p>How many days of the week</p>
                <label class="control control--radio">5 Days
                  <input type="radio" name="radio" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">3 Days
                  <input type="radio" name="radio"/>
                  <div class="control__indicator"></div>
                </label>
                <p>What is your prefered payment duration</p>
                <label class="control control--radio">1 Month
                  <input type="radio" name="payment"/>
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">3 Months
                  <input type="radio" name="payment" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">6 Months
                  <input type="radio" name="payment"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="save">save 10%</span><br>
                <span class="total">total $30 usd</span><br><br><br>
                <input type="submit" class="btn subscribe-button" value="START NOW">
              </form>
              
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> <!-- end of product session -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
