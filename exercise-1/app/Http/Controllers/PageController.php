<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PageController extends Controller
{
    public function blog()
    {
        $pages = Post::pages()->get();
        $posts = Post::posts()->get();

        return view('blog', compact('pages', 'posts'));
    }

    public function post(Post $post)
    {
        $pages = Post::pages()->get();

        return view('post', compact('pages', 'post'));
    }
}
