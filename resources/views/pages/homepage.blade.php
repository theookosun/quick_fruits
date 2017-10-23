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
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3">
        <div class="dashboard-nav">
          <div class="dashboard-img">
            <a href="{{url('/')}}"><img src="images/logo.png" class="img-responsive"></a>
          </div>
          <hr>
          <div class="dashboard-img">
            <img src="images/user.jpg" class="img-responsive img-circle">
          </div>
          <h3 class="text-center">Welcome <b>@if (Auth::user()){{Auth::user()->name }} @endif</b></h3>
          <nav class="navbar navbar-default overide-navbar-default" role="navigation">
          <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle navbar-toggle-left" style="z-index: 9999" data-toggle="collapse" data-target=".navbar-ex2-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex2-collapse">
              <ul class="nav navbar-justify nav-pills nav-stacked">
                <li class="active"><a href="{{url('/dashboard')}}">Overview</a></li>
                <li><a href="{{route('subscriptions')}}">Subscriptions</a></li>
                <li><a href="{{route('order-history')}}">Order History</a></li>
                <li><a href="{{route('feedback')}}">Feedback</a></li>
                <li><a href="{{route('settings')}}">Settings</a></li>
                <li><a href="{{route('logout')}}">Logout</a></li>
                
              </ul>
            </div><!-- /.navbar-collapse -->
          </nav>
        </div>
      </div>
      <div class="col-sm-9">   
        <div class="row">
          <div class="dashboard-card-wrapper">
            <div class="row">
              <div class="col-sm-9 col-sm-offset-1">
                <div class="row">
                  <div class="col-sm-6">
                  <div class="dashboard-card">
                    <h3>Overview</h3>
                    <hr>
                    
                   
                    <p style="text-align: justify;"> @if (Auth::user()->id == $order->user_id) Plan Name: {{ $order->order_name}} @endif </p><br>
                    <p style="color: mediumseagreen; text-align: justify;">Plan Started: {{$order->created_at}}</p><br>
                    <p style="color: #ff6600; text-align: justify;">Plan Ends: {{{$order->expiry_date}}}</p><br>
                    <p></p>
                  </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="dashboard-card">
                      <h3>Plan Details</h3>
                      <hr>
                      <p><span style="color: #ff6600">16</span> Delivered</p><br>
                      <p><span>4</span> Remaining</p>
                      <a href="{{ url('/') }}" class="btn dashboard-card-button">Add new Plan</a>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="dashboard-card">
                      <h3>On Demand</h3>
                      <hr>
                      <p>You can also recieve our tasty fruit salad without subscription, this is just a one-time delivery.</p>
                      <a href="{{route('ondemand')}}" class="btn dashboard-card-button">On Demand</a>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="dashboard-card">
                      <h3>Action</h3>
                      <hr>
                      <a href="#" class="btn dashboard-card-button btn-pause">Pause Subscription</a>
                      <a href="#" class="btn dashboard-card-button btn-cancel">Cancel Subscription</a>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</body>
</html>
