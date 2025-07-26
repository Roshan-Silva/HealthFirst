@extends('frontend.layouts.master')

@section('content')

<!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>Cleanliness Rule Details</h2>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
	
		<!-- Start Portfolio Details Area -->
		<section class="pf-details section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="inner-content">
							<div class="image-slider">
								<div class="pf-details-slider">
									<img src="{{asset('frontend/img/pf02.jpg') }}" >
									<img src="{{asset('frontend/img/pf01.jpg') }}" >
									
								</div>
							</div>
							
							<div class="body-text">
								<h3>Commitment to Hygiene Excellence</h3>
								<p>At our hospital, we strictly follow cleanliness and hygiene protocols to ensure a safe and healthy environment for patients, staff, and visitors. Regular sanitization, proper waste disposal, and infection control measures are maintained to uphold the highest standards of cleanliness.</p>
								<p>Our dedicated team conducts frequent disinfection of high-touch surfaces, patient rooms, and medical equipment. We adhere to strict hand hygiene practices and use hospital-grade disinfectants to prevent infections. Every staff member is trained in maintaining a sterile environment, ensuring your safety at all times. </p>
								<p>At our hospital, we strictly follow cleanliness and hygiene protocols to ensure a safe and healthy environment for patients, staff, and visitors. Regular sanitization, proper waste disposal, and infection control measures are maintained to uphold the highest standards of cleanliness.</p>
								<p>We enforce rigorous cleaning schedules, air purification systems, and waste segregation to minimize contamination risks. From operating theaters to waiting areas, every space undergoes thorough sterilization. Your health is our priority, and we maintain a zero-tolerance policy towards hygiene negligence.</p>
								<p>We understand the importance of cleanliness in healthcare, and we are committed to providing a hygienic space for all. Our protocols are regularly reviewed and updated to align with the latest health guidelines, ensuring that we meet and exceed industry standards.</p>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Portfolio Details Area -->

@endsection