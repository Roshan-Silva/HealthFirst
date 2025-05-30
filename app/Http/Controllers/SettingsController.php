<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings; 

class SettingsController extends Controller
{
   public function index()
   {
       $setting = Settings::all()->pluck('value', 'key')->toArray();
       return view('admin.settings', compact('setting'));
   }

   public function update(Request $request)
   {
       $data = $request->validate([
           'site_name' => 'required|string|max:255',
           'site_description' => 'nullable|string|max:500',
           'site_email' => 'required|email|max:255',
           'site_phone' => 'nullable|string|max:20',
           'site_address' => 'nullable|string|max:255',
           'site_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           'site_favicon' => 'nullable|image|mimes:ico,png,jpg,gif,svg|max:2048',
           'site_keywords' => 'nullable|string|max:255',
           'site_copyright' => 'nullable|string|max:255',
           'site_social_facebook' => 'nullable|url|max:255',
           'site_social_twitter' => 'nullable|url|max:255',
           'site_social_instagram' => 'nullable|url|max:255',
           'site_social_linkedin' => 'nullable|url|max:255',
           'site_social_youtube' => 'nullable|url|max:255',
       ]);

       foreach ($data as $key => $value) {
           Settings::updateOrCreate(['key' => $key], ['value' => $value]);
       }

       return redirect()->back()->with('success', 'Settings updated successfully.');
   }
}