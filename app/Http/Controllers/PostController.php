<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        ##
        // $posts = Post::with('comments')->get();
        // return $posts;

        ##
        // $post = Post::find(1);
        // $commentCount = $post->comments()->count();
        // return $commentCount;

        ##
        // $post = Post::find(1);
        // $comments = $post->comments()->pluck('id');
        // return $comments;

        ##
        $post = Post::find(1);
        $comments = [
            new Comment(['comment' => 'First comment']),
            new Comment(['comment' => 'Second comment']),
        ];
        $post->comments()->saveMany($comments);

        return $post->load('comments');

        ##
        // $post = Post::find(1);
        // $post->comments()->delete();
        // return $post->load('comments');

        ##
        // $post = Post::find(1);
        // $comment = $post->comments()->firstOrCreate(
        //     ['comment' => 'yolo'],
        //     ['post_id' => $post->id]
        // );
        
        // return $post->load('comments');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
