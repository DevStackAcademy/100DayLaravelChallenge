<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PageController extends Controller
{
    public function blog()
    {
        $pages = Post::whereType('PAGE')->get();
        $posts = Post::whereType('POST')->orderByDesc('id')->get();

        return view('blog', compact('pages', 'posts'));
    }

    public function post(Post $post)
    {
        $pages = Post::whereType('PAGE')->get();

        return view('post', compact('pages', 'post'));
    }
}
