<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Doctor; 

class DoctorController extends Controller
{
    public function index()
    {
        // Logic to fetch and display doctors
        $doctors = Doctor::all();
        return view('admin.doctors', compact('doctors'));
        
    }
    public function home()
    {
        $doctors = Doctor::all();
        return view('frontend.doctors', compact('doctors'));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'phone' => 'nullable|string|max:15',
            'email' => 'nullable|email|max:255',
            'availability_in_monday_to_friday' => 'nullable|string|max:255',
            'availability_in_saturday' => 'nullable|string|max:255',
            'availability_in_sunday' => 'nullable|string|max:255',
        ]);
        $doctor = new Doctor();
        $doctor->name = $request->name;
        $doctor->specialization = $request->specialization;
        $doctor->phone = $request->phone;
        $doctor->email = $request->email;
        $doctor->availability_in_monday_to_friday = $request->availability_in_monday_to_friday;
        $doctor->availability_in_saturday = $request->availability_in_saturday;
        $doctor->availability_in_sunday = $request->availability_in_sunday;
        $doctor->save();



        
        return redirect()->route('doctors.index')->with('success', 'Doctor added successfully.');
    }

    public function update(Request $request)
    {
        
        $request->validate([
            'id' => 'required|exists:doctors,id',
            'name' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'phone' => 'nullable|string|max:15',
            'email' => 'nullable|email|max:255',
            'availability_in_monday_to_friday' => 'nullable|string|max:255',
            'availability_in_saturday' => 'nullable|string|max:255',
            'availability_in_sunday' => 'nullable|string|max:255',
        ]);
        $doctor = Doctor::findOrFail($request->id);
        $doctor->name = $request->name;
        $doctor->specialization = $request->specialization;
        $doctor->phone = $request->phone;
        $doctor->email = $request->email;
        $doctor->availability_in_monday_to_friday = $request->availability_in_monday_to_friday;
        $doctor->availability_in_saturday = $request->availability_in_saturday;
        $doctor->availability_in_sunday = $request->availability_in_sunday;
        $doctor->save();
        
        return redirect()->route('doctors.index')->with('success', 'Doctor updated successfully.');
    }

    public function destroy($id)
    {
        
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();

        return redirect()->route('doctors.index')->with('success', 'Doctor deleted successfully.');
    }
}
