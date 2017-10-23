<section id="homepage-hero-banner">
	
	<!-- Hero Text -->
	<div class="hero-content mr40 ml10">

		<!-- Navigation Bar -->
		<nav class="navbar">
			<ul class="list-inline pt60 pl30">
				<li> <a href="#">Home</a> </li>
				<li> <a href="#">History</a> </li>
				<li> <a href="#">Subscription</a> </li>
			</ul>
		</nav>
		
		<div class="hero-text">
			<h3 class="text-heading">Welcome {{Auth::user()->name}}</h3>
			<p class="text-body">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. 
			</p>
			
		</div>

	</div> <!-- EOF Hero-Content -->

</section>