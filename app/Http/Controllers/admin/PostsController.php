<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posts;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Posts::all();
        return view('admin.posts', compact('posts'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            
            $imagePath = $request->file('image')->store('posts_images', 'public');
           
        }

        Posts::create([
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
            'image' => $imagePath ?? null, 
        ]);
        return redirect()->back()->with('success', 'Post created successfully.');
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|exists:posts,id',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $post = Posts::findOrFail($validatedData['id']);

        if ($request->hasFile('image')) {
           
            $imagePath = $request->file('image')->store('posts_images', 'public');
            $post->image = $imagePath; 
        }

        $post->title = $validatedData['title'];
        $post->content = $validatedData['content'];
        $post->save();

        return redirect()->back()->with('success', 'Post updated successfully.');
    }
    public function destroy($id)
    {
        $post = Posts::findOrFail($id);
        $post->delete();
        return redirect()->back()->with('success', 'Post deleted successfully.');
    }
}
