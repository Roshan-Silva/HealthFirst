<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Support\Facades\DB;
use carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch all users from the database
        $userCount = User::count();
        $appointmentCount = Appointment::count(); 
        $doctorCount = Doctor::count();

        $monthlyUsers = User::select(
            DB::raw('COUNT(*) as count'),
            DB::raw("DATE_FORMAT(created_at, '%M') as month"),
            DB::raw("MONTH(created_at) as month_number")
        )
        ->groupBy('month', 'month_number')
        ->orderBy('month_number')
        ->get();

        // Split into two arrays
        $months = $monthlyUsers->pluck('month');
        $counts = $monthlyUsers->pluck('count');

        $monthlyAppointments = Appointment::select(
            DB::raw('COUNT(*) as count'),
            DB::raw("DATE_FORMAT(created_at, '%M') as month"),
            DB::raw("MONTH(created_at) as month_number")
        )
        ->groupBy('month', 'month_number')
        ->orderBy('month_number')
        ->get();

        // Split into two arrays
        $appMonths = $monthlyAppointments->pluck('month');
        $appCounts = $monthlyAppointments->pluck('count');

        return view('admin.dashboard', compact('userCount', 'appointmentCount', 'doctorCount', 'months', 'counts', 'appMonths', 'appCounts'));
    }
}