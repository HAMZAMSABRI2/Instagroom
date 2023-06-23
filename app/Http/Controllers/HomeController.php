<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $post = Post::latest()->get();
        
        return view('dashboard' , compact('post'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'cover'=>'required|mimes:png,jpg,svg,jpeg,gif,webp|max:5120',

        ]);

        $post =new Post();

        $post->user_id = Auth::id();

        if ($request->hasFile('cover')){
            $post->cover =$request->file('cover')->store('uploads/posts');

        }

        $post->description = $request->description;

        $post->save();

        return back();
    }

    public function destroy_post($id)

    {
       $post = Post::find($id);
       
       $post->delete();
    }
}
