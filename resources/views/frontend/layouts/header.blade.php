<header class="header" >
			
			
	<div class="header-inner">
		<div class="container">
			<div class="inner">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-12">
						<!-- Start Logo -->
						<div class="logo">
							<img src="{{asset('frontend/img/logo_2.png') }}" alt="#">
						</div>
						<!-- End Logo -->
						<!-- Mobile Nav -->
						<div class="mobile-nav"></div>
						<!-- End Mobile Nav -->
					</div>
					<div class="col-lg-7 col-md-9 col-12">
						<!-- Main Menu -->
						<div class="main-menu">
							<nav class="navigation">
								<ul class="nav menu">
									<li><a href="/">Home </a>
										
									</li>
									<li><a href="/doctors">Doctors </a></li>
									<li><a href="/services">Services </a></li>
									
									<li><a href="/blogs">Blogs </a>
										
									</li>
									<li><a href="/contact">Contact Us</a></li>
									@auth
										<li><a href="/logout">Logout</a></li>
									@else
										<li><a href="/login">Login</a></li>
									@endauth
										
								</ul>
							</nav>
						</div>
						<!--/ End Main Menu -->
					</div>
					<div class="col-lg-2 col-12">
						<div class="get-quote">
							<a href="/appointments" class="btn">Book Appointment</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ End Header Inner -->
</header>