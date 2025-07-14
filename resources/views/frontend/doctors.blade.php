@extends('frontend.layouts.master')

@section('content')

<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Our Doctors</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="schedule py-5">  
    <div class="container">
        <div class="schedule-inner">
            <div class="row">
                @foreach($doctors as $doctor)
                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                        <div class="single-schedule last h-100">
                            <div class="inner">
                                <div class="icon">
                                    <i class="icofont-prescription"></i>
                                </div>
                                <div class="single-content">
                                    <h4>Dr. {{ $doctor->name }}</h4>
                                    <span>{{ $doctor->specialization ?? 'Doctor' }}</span>
                                    <br>
                                    <span>Available time</span>
                                    <ul class="time-sidual">
                                        <li class="day">Monday - Friday <span>{{ $doctor->availability_in_monday_to_friday }}</span></li>
                                        <li class="day">Saturday <span>{{ $doctor->availability_in_saturday }}</span></li>
                                        <li class="day">Sunday <span>{{ $doctor->availability_in_sunday }}</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection