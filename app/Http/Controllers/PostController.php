<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.createPost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data =  $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $data['user_id'] = Session::get('user')["id"];
        Post::create($data);
        return redirect('posts');


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
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.editePost', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
     $post = Post::find($id);
     $post->title = $request->title;
     $post->body = $request->body;
     $post->save();
     return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       $post = Post::find($id);
       $post->delete();
       return redirect('posts');
    }
}
