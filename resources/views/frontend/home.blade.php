@extends('frontend.layouts.master')

@section('content')


		<section class="slider">
			<div class="hero-slider">
				@include('frontend.home.slider')
			</div>
		</section>
		<br>
		
		<section class="Feautes section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<br><br><br>
							<h2>We Are Always Ready to Help You & Your Family</h2>
							<img src="{{asset('frontend/img/section-img.png') }}" alt="#">
							<p>Your family’s health and well-being are our top priority. With compassionate care, expert doctors, and 24/7 support, we’re here for you whenever you need us. Trust us to keep you and your loved ones healthy.</p>
						</div>
					</div>
				</div>
				
			</div>
		</section>
		<!--/ End Feautes -->
		
		<!-- Start Fun-facts -->
		<div id="fun-facts" class="fun-facts section overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-home"></i>
							<div class="content">
								<span class="counter">240</span>
								<p>Hospital Rooms</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-user-alt-3"></i>
							<div class="content">
								<span class="counter">45</span>
								<p>Specialist Doctors</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont-simple-smile"></i>
							<div class="content">
								<span class="counter">1370</span>
								<p>Happy Patients</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-table"></i>
							<div class="content">
								<span class="counter">06</span>
								<p>Years of Experience</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
				</div>
			</div>
		</div>
		<!--/ End Fun-facts -->
		
		
		
		
		
		<!-- Start portfolio -->
		<section class="portfolio section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Maintain Cleanliness Rules Inside Our Hospital</h2>
							<img src="{{asset('frontend/img/section-img.png') }}" alt="#">
							<p>At our hospital, we strictly follow cleanliness and hygiene protocols to ensure a safe and healthy environment for patients, staff, and visitors.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-12">
						<div class="owl-carousel portfolio-slider">
							<div class="single-pf">
								<img src="{{asset('frontend/img/pf01.jpg') }}" alt="#">
								<a href="/cleanliness_rule" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="{{asset('frontend/img/pf02.jpg') }}" alt="#">
								<a href="/cleanliness_rule" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="{{asset('frontend/img/pf01.jpg') }}" alt="#">
								<a href="/cleanliness_rule" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="{{asset('frontend/img/pf02.jpg') }}" alt="#">
								<a href="/cleanliness_rule" class="btn">View Details</a>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End portfolio -->
		
		<!-- Start service -->
		<section class="services section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Offer Different Services To Improve Your Health</h2>
							<img src="{{asset('frontend/img/section-img.png') }}" alt="#">
							{{-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p> --}}
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-prescription"></i>
							<h4><a href="service-details.html">General Treatment</a></h4>
							<p>We provide comprehensive medical care for common illnesses, injuries, and health concerns. Our experienced doctors diagnose and treat a wide range of conditions, ensuring personalized care for every patient. </p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-tooth"></i>
							<h4><a href="service-details.html">Teeth Whitening</a></h4>
							<p>Achieve a brighter smile with our safe and effective teeth whitening treatments. Using advanced techniques, we remove stains and discoloration, giving you natural-looking, long-lasting results. </p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-heart-alt"></i>
							<h4><a href="service-details.html">Heart Surgery</a></h4>
							<p>Our expert cardiac team performs life-saving heart surgeries, including bypasses, valve repairs, and minimally invasive procedures. We prioritize precision, safety, and advanced technology for optimal outcomes. </p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-listening"></i>
							<h4><a href="service-details.html">Ear Treatment</a></h4>
							<p>From infections to hearing loss, we offer specialized ear care, including diagnostics, treatments, and surgical interventions. Our ENT specialists ensure relief and improved ear health. </p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-eye-alt"></i>
							<h4><a href="service-details.html">Vision Problems</a></h4>
							<p>We diagnose and treat vision issues like myopia, cataracts, and glaucoma. With advanced eye exams and corrective procedures, we help restore and protect your eyesight.</p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-blood"></i>
							<h4><a href="service-details.html">Blood Transfusion</a></h4>
							<p>Safe and timely blood transfusions are provided for surgeries, emergencies, and chronic conditions. We follow strict screening and storage protocols to ensure patient safety.</p>	
						</div>
						<!-- End Single Service -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End service -->
		
		
		
		
		
		@include('frontend.home.news')
		
	

@endsection