@foreach ($sliders as $slider)


    <!-- Start Single Slider -->
<div class="single-slider" style="background-image:url({{asset('storage/'.$slider->image_link)}})">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="text">
                    <h1>{{$slider->heading}}</h1>
                    <p>{{ $slider->sub_heading }}</p>
                    <div class="button">
                        <a href="{{ $slider->get_appointment_link }}" class="btn">Get Appointment</a>
                        <a href="{{ $slider->contact_link }}" class="btn primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Single Slider -->
<!-- Start Single Slider -->
{{-- <div class="single-slider" style="background-image:url('frontend/img/slider.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="text">
                    <h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam. </p>
                    <div class="button">
                        <a href="/appointment" class="btn">Get Appointment</a>
                        <a href="#" class="btn primary">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
    
@endforeach


