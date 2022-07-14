<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function insertView()
    {
        return view('post-input');
    }

    public function create(Request $request)
    {
        $post = Post::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'body' => $request->body
        ]);

        return redirect()->route('post', $post);
    } 

    public function read(Post $post)
    {
        return view('post')->with('post', $post);
    }

    public function update(Request $request)
    {
        //
    }
}
