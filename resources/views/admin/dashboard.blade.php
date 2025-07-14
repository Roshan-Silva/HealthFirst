@extends('admin.layouts.master')
@section('content') 


                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Users</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <li>{{$userCount}}</li>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Total Appointments</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <li>{{ $appointmentCount }}</li>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total Doctors</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <li>{{$doctorCount}}</li>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Appointments
                                    </div>
                                    <div class="card-body">
                                        <canvas id="myAreaChart" width="100%" height="40"></canvas>
                                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                                        <script>
                                            const labels = {!! json_encode($appMonths) !!};
                                            const data = {!! json_encode($appCounts) !!};

                                            const ctx = document.getElementById('myAreaChart').getContext('2d');
                                            const myAreaChart = new Chart(ctx, {
                                                type: 'line',
                                                data: {
                                                    labels: labels,
                                                    datasets: [{
                                                        label: 'Appointments',
                                                        data: data,
                                                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                                        borderColor: 'rgba(75, 192, 192, 1)',
                                                        borderWidth: 1
                                                    }]
                                                },
                                                options: {
                                                    responsive: true,
                                                    plugins: {
                                                        legend: { display: false }
                                                    },
                                                    scales: {
                                                        y: {
                                                            beginAtZero: true,
                                                            precision: 0,
                                                            ticks: {
                                                                // This ensures only integer ticks appear
                                                                callback: function(value) {
                                                                    if (Number.isInteger(value)) {
                                                                        return value;
                                                                    }
                                                                },
                                                                // stepSize: 1  // 👈 Optional: manually control step interval
                                                            }
                                                        }
                                                    }
                                                }
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Users
                                    </div>
                                    <div class="card-body">
                                        <canvas id="myBarChart" width="100%" height="40"></canvas>
                                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                                        <script>
                                            const UserLabels = {!! json_encode($months) !!};
                                            const userData = {!! json_encode($counts) !!};

                                            const ctxUser = document.getElementById('myBarChart').getContext('2d');
                                            const myBarChart = new Chart(ctxUser, {
                                                type: 'bar',
                                                data: {
                                                    labels: UserLabels,
                                                    datasets: [{
                                                        label: 'Users Registered',
                                                        data: userData,
                                                        backgroundColor: 'rgba(54, 162, 235, 0.7)',
                                                        borderColor: 'rgba(54, 162, 235, 1)',
                                                        borderWidth: 1
                                                    }]
                                                },
                                                options: {
                                                    responsive: true,
                                                    plugins: {
                                                        legend: { display: false }
                                                    },
                                                    scales: {
                                                        y: {
                                                            beginAtZero: true,
                                                            precision: 0,
                                                            ticks: {
                                                                // This ensures only integer ticks appear
                                                                callback: function(value) {
                                                                    if (Number.isInteger(value)) {
                                                                        return value;
                                                                    }
                                                                },
                                                                // stepSize: 1  // 👈 Optional: manually control step interval
                                                            }
                                                        }
                                                    }
                                                }
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                

@endsection