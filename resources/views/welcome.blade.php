  @extends('layouts.layout')

 @section('content')
  <div style="position: absolute; top: 10px; z-index: 1;left: 47.5%;">
        <img src="images/logo.png" class="img-responsive" width="20%" height="20%">
  </div>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="head-wrapper">
        <div class="head-wrapper-content">
          <h1>
          More than fruits-its<br>
          <span>health</span> and <span>life</span>.
        </h1>
        <p>QuickFruits provides you with the daily<br>neccessary fruits you need where you need<br>them. We believe in the healthier you.</p>
        <a href="#" class="btn start-button">START HERE</a>
        </div>
      </div>
    </div>
  </div>
</div> <!-- end of head-wrapper container -->

<div class="container">
  <div class="row">
    <div class="card-1">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <div class="col-sm-6">
            <div class="center-image">
              <img src="images/melon.png" class="img-responsive" width="100%" height="100%">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="product-description">
              <h2>LIGHT FRUIT SALAD</h2>
              <p>A curated selection of gourmet foods—including ingredients to cook with, drinks, and snacks—from a new country every month. <br><br> Start your journey in LAGOS ISLAND today!</p><br>
              <p><span class="starting-from">STARTING FROM</span> <br>
              <span class="amount">₦7,000 NGN</span><span class="month">/MONTH</span></P>
              <a href="{{route('productone')}}" type="button" class="btn subscribe-button">SUBSCRIBE NOW</a>
            </div>
          </div>
          </div>
        </div>
      </div>

      <div class="card-1">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <div class="col-sm-6">
            <div class="product-description">
              <h2>PRO FRUIT SALAD</h2>
              <p>A curated selection of gourmet foods—including ingredients to cook with, drinks, and snacks—from a new country every month. <br><br> Start your journey in LAGOS ISLAND today!</p><br>
              <p><span class="starting-from">STARTING FROM</span> <br>
              <span class="amount">₦12,000 NGN</span><span class="month">/MONTH</span></P>
              <a href="{{route('producttwo')}}" type="button" class="btn subscribe-button">SUBSCRIBE NOW</a>
            </div>
            </div>
            <div class="col-sm-6">
              <div class="center-image">
                <img src="images/coconut.png" class="img-responsive" width="100%" height="100%">
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div> <!-- end of product session -->

<div class="about-product">
  <div class="container">
    <div class="row">
      <h2 class="text-center">How it works</h2>
      <div class="col-sm-4">
        <div class="about-content">
          <span class="glyphicon glyphicon-hand-up"></span>
          <h3>pick a product</h3>
          <p><i>Select one of our amazing products that have been curated to supply your necessary fruit needs.</i></p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="about-content">
          <span class="glyphicon glyphicon-shopping-cart"></span>
          <h3>start a plan</h3>
          <p><i>Pick a plan for delivery and frequency, we're always glad to supply you daily.</i></p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="about-content">
          <span class="glyphicon glyphicon-heart-empty"></span>
          <h3>enjoy your fruits</h3>
          <p><i>That's all there is to it, now enjoy deliveries every day of the week right at your office.</i></p>
        </div>
      </div>
    </div>
  </div>
</div> <!-- end of about product -->



@endsection


