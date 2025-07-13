<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Appointment;
use Illuminate\Support\Facades\DB;
use carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch all users from the database
        $userCount = User::count();
        $appointmentCount = Appointment::count(); // Assuming you have an Appointment model

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

        return view('admin.dashboard', compact('userCount', 'appointmentCount','months', 'counts', 'appMonths', 'appCounts'));
    }

    // public function show($id)
    // {
    //     // Fetch a specific user by ID
    //     $user = User::findOrFail($id);
    //     return view('admin.home.show', compact('user'));
    // }

    // public function edit($id)
    // {
    //     // Fetch a specific user for editing
    //     $user = User::findOrFail($id);
    //     return view('admin.home.edit', compact('user'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $validatedData = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|max:255|unique:users,email,' . $id,
    //         'password' => 'nullable|string|min:8|confirmed',
    //     ]);

    //     $user = User::findOrFail($id);
    //     $user->name = $validatedData['name'];
    //     $user->email = $validatedData['email'];

    //     if ($request->filled('password')) {
    //         $user->password = bcrypt($validatedData['password']);
    //     }

    //     $user->save();

    //     return redirect()->route('admin.home.index')->with('success', 'User updated successfully.');
    // }
}