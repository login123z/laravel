<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->orderBy('id', 'desc')->get();
        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'max:255'],
        ]);

        Post::create([
            'title' => $validated['title'],
            'user_id' => auth()->user()->id,
        ]);
        return redirect()-> route('home');
    }
}
