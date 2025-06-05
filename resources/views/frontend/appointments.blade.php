@extends('frontend.layouts.master')

@section('content')

<!-- Start Appointment -->
		<section class="appointment">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Are Always Ready to Help You. Book An Appointment</h2>
							<img src="{{asset('frontend/img/section-img.png') }}" alt="#">
							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-12 col-12">
						<form method="POST" class="form" action="/addAppointment"  enctype="multipart/form-data">
                            @csrf
							<div class="row">
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="name" type="text" placeholder="Name">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="email" type="email" placeholder="Email">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="phone" type="text" placeholder="Phone">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<select name="department" class="form-control">
											<option value="">Select Department</option>
											<option value="Cardiac Clinic">Cardiac Clinic</option>
											<option value="Neurology">Neurology</option>
											<option value="Dentistry">Dentistry</option>
											<option value="Gastroenterology">Gastroenterology</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<select name="doctor" class="form-control">
											<option value="">Select Doctor</option>
											<option value="Dr. Anil Fernando">Dr. Anil Fernando</option>
											<option value="Dr. Janith Perera">Dr. Janith Perera</option>
											<option value="Dr. Saranga Silva">Dr. Saranga Silva</option>
											
										</select>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input type="text" name="date" placeholder="Date" id="datepicker">
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-12">
									<div class="form-group">
										<textarea name="message" placeholder="Write Your Message Here....."></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-5 col-md-4 col-12">
									<div class="form-group">
										<div class="button">
											<button type="submit" class="btn">Submit An Appointment</button>
										</div>
									</div>
								</div>
								{{-- <div class="col-lg-7 col-md-8 col-12">
									<p>( We will be confirm by an Text Message )</p>
								</div> --}}
							</div>
						</form>
					</div>
					<div class="col-lg-6 col-md-12 ">
						<div class="appointment-image">
							<img src="{{asset('frontend/img/contact-img.png') }}" alt="#">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Appointment -->

@endsection