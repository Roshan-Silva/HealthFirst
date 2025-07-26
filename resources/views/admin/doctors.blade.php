@extends('admin.layouts.master')

@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Doctors</h1>
    </div>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add New Doctor
    </button>

    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Specialization</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Availability (Mon-Fri)</th>
                    <th>Availability (Sat)</th>
                    <th>Availability (Sun)</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($doctors as $doctor)
                    <tr>
                        <td>{{ $doctor->name }}</td>
                        <td>{{ $doctor->specialization }}</td>
                        <td>{{ $doctor->phone }}</td>
                        <td>{{ $doctor->email }}</td>
                        <td>{{ $doctor->availability_in_monday_to_friday }}</td>
                        <td>{{ $doctor->availability_in_saturday }}</td>
                        <td>{{ $doctor->availability_in_sunday }}</td>
                        <td>
                            
                           
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{ $doctor->id }}">
                                Edit
                            </button>
                            <a href="{{ route('doctor.delete', $doctor->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this order details?')">Delete</a>
                        </td>
                    </tr>

                    <!--Doctor updating Modal -->
                    <div class="modal fade" id="exampleModal{{ $doctor->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Doctor Details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                

                                <form method="POST" action="/doctorUpdate" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $doctor->id }}">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                        <label for="heading">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $doctor->name }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="subheading"> Specialization</label>
                                        <input type="text" class="form-control" id="specialization" name="specialization" value="{{ $doctor->specialization }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="subheading">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="phone" value="{{ $doctor->phone }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="subheading">Email</label>
                                        <input type="text" class="form-control" id="email" name="email" value="{{ $doctor->email }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="subheading">Availability in Monday to Friday</label>
                                        <input type="text" class="form-control" id="availability in monday to friday" name="availability_in_monday_to_friday" value="{{ $doctor->availability_in_monday_to_friday}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="subheading">Availability in Saturday</label>
                                        <input type="text" class="form-control" id="availability in saturday" name="availability_in_saturday" value="{{ $doctor->availability_in_saturday }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="subheading">Availability in Sunday</label>
                                        <input type="text" class="form-control" id="availability in sunday" name="availability_in_sunday" value="{{ $doctor->availability_in_sunday }}">
                                    </div>
                                    </div>
                                    
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update Doctor Details</button>
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

    

    <!--Doctor adding Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Doctor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                

                <form method="POST" action="/doctorStore" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="heading">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="name">
                        </div>
                        <div class="mb-3">
                            <label for="subheading"> Specialization</label>
                            <input type="text" class="form-control" id="specialization" name="specialization" placeholder="specialization">
                        </div>
                        <div class="mb-3">
                            <label for="subheading">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="phone">
                        </div>
                        <div class="mb-3">
                            <label for="subheading">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="email">
                        </div>
                        <div class="mb-3">
                            <label for="subheading">Availability in Monday to Friday</label>
                            <input type="text" class="form-control" id="availability in monday to friday" name="availability_in_monday_to_friday" placeholder="availability in monday to friday">
                        </div>
                        <div class="mb-3">
                            <label for="subheading">Availability in Saturday</label>
                            <input type="text" class="form-control" id="availability in saturday" name="availability_in_saturday" placeholder="availability in saturday">
                        </div>
                        <div class="mb-3">
                            <label for="subheading">Availability in Sunday</label>
                            <input type="text" class="form-control" id="availability in sunday" name="availability_in_sunday" placeholder="availability in sunday">
                        </div>
                        
                        
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Doctor</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- EndModal -->


    


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
@endsection