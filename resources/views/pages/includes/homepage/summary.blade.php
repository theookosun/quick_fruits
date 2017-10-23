<section id="homepage-summary-section">

	<div class="row ml0 mr0" id="title">
		<div class="col-xs-12 text-center ">
			Here Is Your Summary
		</div>		
	</div>
	
	<!-- Content -->
	<div class="row ml0 mr0 mb20" id="content">
		<div class="col-sm-6 mb20">

			<!-- Summary -->
			<div class="group mb40">
				<div class="heading mb10">
					SUMMARY | {{date('d-M-Y')}}
				</div>
				<div class="card">
					<div class="row">
						<div class="col-xs-4 text-center item">
							<div class="large">{{ $numberOfActivePlans }}</div>
							<h4>Active <br> Subscriptions</h4>
							<a href="#">View Subscriptions</a>
						</div>
						<div class="col-xs-4 text-center item">
							<div class="large">0</div>
							<h4>Upcoming <br> Renewals</h4>
							<a href="#">View Subscriptions</a>
						</div>
						<div class="col-xs-4 text-center item">
							<div class="large">
								0 <small>days</small>
							</div>
							<h4>Next <br> Delivery</h4>
							<a href="#">View Subscriptions</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Actions -->
			<div class="group">
				<div class="heading mb10">
					ACTIONS
				</div>
				<div class="card">
					<div class="row">
						<div class="col-xs-4 text-center item">
							<div class="mb5">Don't have a plan? </div>
							<a href="{{ route('subscribe-to-plan') }}" class="btn btn-green">Get A Plan</a>
						</div>
						<div class="col-xs-4 text-center item">
							<div class="mb5">Need something more?</div>
							<a href="#" class="btn btn-green">Upgrade Plan</a>
						</div>
						<div class="col-xs-4 text-center item">
							<div class="mb5">Almost Out? </div>
							<a href="#" class="btn btn-orange">Renew Plan</a>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="col-sm-6 text-center">

			<div class="row">
				<div class="col-md-offset-3 col-md-6 ">
					<div class="group-two">
						<h3 class="text-heading">Did You Know?</h3>
						<p class="text-body text-left">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<a href="#" class="btn btn-blue">Read More</a>	
					</div>
				</div>
			</div>
		
		</div>
	</div>

</section>