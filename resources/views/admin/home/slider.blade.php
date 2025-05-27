@extends('admin.layouts.master')

@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Slider Manager</h1>
    </div>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add New Slide
    </button>

    <div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Slide</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                

                <form method="POST" action="/sliderStore" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="heading">Heading</label>
                            <input type="text" class="form-control" id="heading" name="heading" placeholder="Heading">
                        </div>
                        <div class="mb-3">
                            <label for="subheading"> Sub Heading</label>
                            <input type="text" class="form-control" id="subheading" name="sub_heading" placeholder="Sub Heading">
                        </div>
                        <div class="mb-3">
                            <label for="getappointmentlink">Get Appointment Link</label>
                            <input type="url" class="form-control" id="getappointmentlink" name="get_appointment_link" placeholder="Get Appointment Link">
                        </div>
                        <div class="mb-3">
                            <label for="contactlink">Contact Link</label>
                            <input type="url" class="form-control" id="contactlink" name="contact_link" placeholder="Contact Link">
                        </div>
                        <div class="mb-3">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" id="image" name="image" placeholder="Image">
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Slider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- EndModal -->

    <div>

        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Heading</th>
                        <th>Sub Heading</th>
                        <th>Get Appointment Link</th>
                        <th>Contact Link</th>
                        <th>Image Link</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach ($sliders as $slider)
                     <tr>
                        <td>{{$slider->heading}}</td>
                        <td>{{$slider->sub_heading}}</td>
                        <td>{{$slider->get_appointment_link}}</td>
                        <td>{{$slider->contact_link}}</td>
                        <td><img width="100" src="{{asset('storage/'.$slider->image_link)}}"></td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{ $slider->id }}">
                                Edit
                            </button>
                            <a href="/sliderDelete/{{ $slider->id }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this slide?')">Delete</a>
                        </td>
                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{ $slider->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Slide</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                

                                <form method="POST" action="/sliderUpdate" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $slider->id }}">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="heading">Heading</label>
                                            <input type="text" class="form-control" id="heading" name="heading" value="{{ $slider->heading }}" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="subheading"> Sub Heading</label>
                                            <input type="text" class="form-control" id="subheading" name="sub_heading" value="{{ $slider->sub_heading }}" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="getappointmentlink">Get Appointment Link</label>
                                            <input type="url" class="form-control" id="getappointmentlink" name="get_appointment_link" value="{{ $slider->get_appointment_link }}" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="contactlink">Contact Link</label>
                                            <input type="url" class="form-control" id="contactlink" name="contact_link" value="{{ $slider->contact_link }}" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="image">Image</label>
                                            <input type="file" class="form-control" id="image" name="image" placeholder="Image">
                                        </div>
                                    </div>
                                    
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update Slider</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- EndModal -->


                        
                    @endforeach
                    
                </tbody>
            </table>
        </div>

    </div>

@endsection