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
            'sub_heading' => 'required|string',
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

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|exists:sliders,id',
            'heading' => 'required|string|max:255',
            'sub_heading' => 'required|string',
            'get_appointment_link' => 'required|url',
            'contact_link' => 'required|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:20480',
        ]);

        $slider = Slider::findOrFail($validatedData['id']);

        // Handle file upload if a new image is provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('slides', 'public');
            $slider->image_link = $imagePath;
        }

        // Update the slider data
        $slider->heading = $validatedData['heading'];
        $slider->sub_heading = $validatedData['sub_heading'];
        $slider->get_appointment_link = $validatedData['get_appointment_link'];
        $slider->contact_link = $validatedData['contact_link'];
        $slider->save();

        return redirect()->back()->with('success','Slider updated successfully !');
    }

    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        $slider->delete();

        return redirect()->back()->with('success', 'Slider deleted successfully!');
    }
}