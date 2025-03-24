<?php

namespace App\Http\Controllers;

use App\Models\Post;
// use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function singlePost(Post $post) {
        return view('posts.single-post', compact('post'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create-post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $incomingFields = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $incomingFields['post_slug'] = Str::slug($incomingFields['title']);
        $incomingFields['user_id'] = Auth::id();

        $newPost = Post::create($incomingFields);
        return redirect("/single-post/{$newPost->post_slug}");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editPost(Post $post)
    {
        return view('posts.edit-post', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $incomingFields = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $incomingFields['post_slug'] = Str::slug($incomingFields['title']);

        $post->update($incomingFields);
        return redirect("/single-post/{$post->post_slug}");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/dashboard')->with('success', 'Student Information successfully deleted.');
    }
}
