<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function create(Request $request)
    {
        Post::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'body' => $request->body
        ]);

        return back()->with('success', 'You have created a new post');
    } 

    public function read(Request $request, Post $post)
    {
        return view('post')->with('post', $post);
    }

    public function update(Request $request)
    {
        //
    }
}
