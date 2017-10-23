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
                <li ><a href="{{url('/dashboard')}}">Overview</a></li>
                <li><a href="{{route('subscriptions')}}">Subscriptions</a></li>
                <li class="active"><a href="{{route('order-history')}}">Order History</a></li>
                <li ><a href="{{route('feedback')}}">Feedback</a></li>
                <li><a href="{{route('settings')}}">Settings</a></li>
                <li><a href="{{route('logout')}}">Logout</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </nav>
        </div>
      </div>
      <div class="col-sm-9">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="order-wrapper">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <p>Order History</p>
            </div>
            <div class="table-responsive">          
              <table class="table">
                <thead>
                  <tr>
                 
                    <th>#</th>
                    <th>Order Name</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Started date</th>
                    <th>Expiry date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <?php $i=0 ?>
                   @foreach($order as $orders)
                   <?php $i++ ?>
                  @if(Auth::user()->id == $orders->user_id)
                    <td>-</td>
                    <td>{{$orders->order_name}}</td>
                    <td>₦{{$orders->amount}}</td>
                    <td> <?php
                              $date_now = new DateTime(); 
                              $date_then = new DateTime($orders->expiry_date) ;?>
                              @if ($date_now < $date_then)  <span class="active-status">Active</span> @else <span class="expired-status">Expired</span> @endif
                              
                    </td>
                    <td>{{$orders->created_at}}</td>
                    <td>{{$orders->expiry_date}}</td>
                  </tr>
                  @endif
                  @endforeach
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
