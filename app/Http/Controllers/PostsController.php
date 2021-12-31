<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function store()
    {
        request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        Post::create([
            'title' => request('title'),
            'content' => request('content')
        ]);

        return redirect('/posts');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function edit(Post $post)
    {

        return view('posts.edit', [
            'post' => $post
        ]);
    }

    public function update(Post $post)
    {

        request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $post->update([
            'title' => request('title'),
            'content' => request('content'),
        ]);

        return redirect('/posts');
    }

    public function delete(Post $post){
        $post->delete();
        return redirect('/posts');
    }
}
