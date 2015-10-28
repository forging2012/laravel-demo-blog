<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $comments = Post::find(1)->Comment();
//        dd($comments);
//        return $comments;
        $comments = Comment::all();
        return view('comment.index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $comment = Post::find(1)->comment();
//        $comment = Post::all();
//        $comment = Post::findOrFail(1)->comment();
//        $comment = Post::find(1);
//        return $comment->post->title;
//        return view('comment.show', compact('comment'));
//        dd($comments);

//        $comment = Comment::findOrFail($id);
//        return view('comment.show', compact('comment'));

//        $comment = Post::find($id)->comment();
//        return view('comment.show', compact('comment'));

//        $comment = Comment::find(1);
//        echo $comment->post->title;

        $comments = Post::findOrFail($id);
        dd($comments);
//        return view('comment.show', compact('comments'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
