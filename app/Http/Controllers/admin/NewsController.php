<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News; 

class NewsController extends Controller
{
    public function index()
    {
        // Fetch all news items from the database
        $news = News::all();
        return view('admin.home.news',compact('news'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image_link' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date' => 'required|date',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        if ($request->hasFile('image_link')) {
            
            $imagePath = $request->file('image_link')->store('news_images', 'public');
            
        }

        News::create([
            'image_link' => $imagePath ?? null, 
            'date' => $validatedData['date'],
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
        ]);

        return redirect()->route('news.index')->with('success', 'News item created successfully.');
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|exists:news,id',
            'image_link' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date' => 'required|date',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $newsItem = News::findOrFail($validatedData['id']);

        if ($request->hasFile('image_link')) {
          
            $imagePath = $request->file('image_link')->store('news_images', 'public');
            $newsItem->image_link = $imagePath; 
        }

      
        $newsItem->date = $validatedData['date'];
        $newsItem->title = $validatedData['title'];
        $newsItem->description = $validatedData['description'];
        $newsItem->save();

        return redirect()->route('news.index')->with('success', 'News item updated successfully.');
    }

    public function destroy($id)
    {
        $newsItem = News::findOrFail($id);
        $newsItem->delete();

        return redirect()->route('news.index')->with('success', 'News item deleted successfully.');
    }
}
