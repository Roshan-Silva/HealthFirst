@extends('admin.layouts.master')

@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Appointments</h1>
    </div>

    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Patient Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Department</th>
                    <th>Doctor Name</th>
                    <th>Date</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                @foreach($appointments as $appointment)
                    <tr>
                        <td>{{ $appointment->id }}</td>
                        <td>{{ $appointment->name }}</td>
                        <td>{{ $appointment->email }}</td>
                        <td>{{ $appointment->phone }}</td>
                        <td>{{ $appointment->department }}</td>
                        <td>{{ $appointment->doctor }}</td>
                        <td>{{ $appointment->date }}</td>
                        <td>{{ $appointment->message }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection