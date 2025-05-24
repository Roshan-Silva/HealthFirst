<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        // Fetch all sliders from the database
        $sliders = Slider::all();
        return view ('admin.home.slider', compact('sliders'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'heading' => 'required|string|max:255',
            'sub_heading' => 'required|string|max:255',
            'get_appointment_link' => 'required|url',
            'contact_link' => 'required|url',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20480',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('slides', 'public');
        }

        // Store the slider data in the database
        Slider::create([
            'heading' => $validatedData['heading'],
            'sub_heading' => $validatedData['sub_heading'],
            'get_appointment_link' => $validatedData['get_appointment_link'],
            'contact_link' => $validatedData['contact_link'],
            'image_link' => $imagePath,
        ]);

        return redirect()->back()->with('success','slider added successfully !');
    }
}
