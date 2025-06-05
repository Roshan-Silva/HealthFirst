<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'doctor' => 'required|string|max:255',
            'date' => 'required|string|max:255',
            'message' => 'required|string|max:255',
        ]);

        Appointment::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'department' => $validatedData['department'],
            'doctor' => $validatedData['doctor'],
            'date' => $validatedData['date'],
            'message' => $validatedData['message'],
        ]);

        return redirect()->back()->with('success','appointment submitted successfully !');

    }

    public function index(){
        $appointments = Appointment::all();
        return view('admin.appointments', compact('appointments'));
    }

    public function destroy($id){
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();
        return redirect()->back()->with('success','Appointment deleted successfully !');
    }
}
