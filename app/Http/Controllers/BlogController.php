<?php

namespace App\Http\Controllers;

use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return inertia('blog/Index', compact('posts'));
    }

    public function show(Post $post)
    {
        return inertia('blog/Show', compact('post'));
    }
}
