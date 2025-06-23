@foreach ($sliders as $slider)


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

    
@endforeach


