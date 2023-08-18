<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function dashboard() 
    {
        //$posts = Post::paginate();
        $posts = $posts = auth()->user()->posts()->paginate();

        return view('dashboard', ['posts' => $posts]);
    }

    public function destroy(Post $post) 
    {
        $this->authorize('delete', $post);
        
        $post->delete();

        return back();
    }
}
