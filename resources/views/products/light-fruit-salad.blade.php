@extends('layouts.header')
@section('content')
<div class="selection-wrapper">
  <div class="container">
    <div class="row">
      <div class="head-text">
        <h2><span class="green">light</span> fruit salad</h2>
      </div>
      <div class="selection-content">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <div class="col-sm-6">
            <div class="center-image">
              <img src="images/melon.png" class="img-responsive" width="85%" height="85%">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="selection-description">
              <form role="form" method="POST"  action="{{ route('checkout') }}"> 
              <input type="hidden" name="light_fruit" value="Light Fruit Salad">
              
              {{ csrf_field() }}
              <p>How many days of the week</p>
            <label class="control control--radio">5 Days
            <input type="radio" id="rad5" name="radio" value='5' onclick="A(this)"  />
            <div class="control__indicator"></div>
          </label>
          <label class="control control--radio">3 Days
            <input type="radio" name="radio" id="rad3" checked="checked" value= '3' onclick="A(this)"/>
            <div class="control__indicator"></div>
          </label>
          <p>What is your prefered payment duration</p>
          <label class="control control--radio">1 Month
            <input type="radio" name="payment" checked="checked" id="1mt" onclick="A(this)" value="1mt"/>
            <div class="control__indicator"></div>
          </label>
          <label class="control control--radio">3 Months
            <input type="radio" name="payment" id="3mt"  value="3mt" onclick="A(this)">
            <div class="control__indicator"></div>
          </label>
          <label class="control control--radio">6 Months
            <input type="radio" name="payment" onclick="A(this)" id="6mt"/>
            <div class="control__indicator"> </div>
          </label>
          <hr color:black >
          <span class="savee">save <span class="save"> 10%</span> <span> when you order for 6 Months</span><br>
          <hr />
          <span  class="total">Total</span> ₦<input value="7000" style="border:none; background-color:transparent" name="fname" type="text" class="savee" id="total"><br><br>
           
          <button type="submit" class="btn subscribe-button"> START NOW</button>
        </form>
              
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> <!-- end of product session -->

<div class="add-on">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-4" style="text-align: center;">
        <a class="btn add-on-button btn-white">SUBSCRIPTION CAN BE PAUSED <span class="glyphicon glyphicon-pause"></span></a>
      </div><br><br><br>
      <div class="col-sm-10 col-sm-offset-1">
        <h2>more delicious options</h2>
        <p>As an exclusive offer this month, Quick Fruits brings you the option of which city to start your journey in! Learn more about each of the available boxes below.</p>
        <div class="col-sm-8 col-sm-offset-2">
          <div style="text-align: center;">
            <div class="col-sm-6">
            <a href="" type="button" class="btn add-on-button btn-green">BODY MINDER</a>
          </div>
          <div class="col-sm-6">
            <a href="" type="button" class="btn add-on-button btn-white">THE PACKAGE</a>
          </div>
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
<script type="text/javascript">
 
  function A (chk){
 if ( document.getElementById("rad5").checked && document.getElementById("1mt").checked ) {
    
        document.getElementById("total").value = '10000';
        
    }
    else if(
      document.getElementById("rad5").checked && document.getElementById("3mt").checked ) {
        document.getElementById("total").value= '30000'
      }
    else if(
      document.getElementById("rad5").checked && document.getElementById("6mt").checked ) {
        document.getElementById("total").value= '54800'
      }
     if(
      document.getElementById("rad3").checked && document.getElementById("1mt").checked ) {
        document.getElementById("total").value= '7000'
      }
    else if(
      document.getElementById("rad3").checked && document.getElementById("3mt").checked ) {
        document.getElementById("total").value= '21000'
      }
    else if(
      document.getElementById("rad3").checked && document.getElementById("6mt").checked ) {
        document.getElementById("total").value= '37800'
      }
   
    }
  
  

</script>
</body>
</html>
@endsection
