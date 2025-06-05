<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SavePostRequest;

class PostController extends Controller
{

    public function index()
    {
        $post = Post::get();

        return view('blog', ['posts' => $post]);
    }

    public function show(Post $post){
        return view('posts.show', ['post' => $post]);
    }

    public function create(){
        return view('posts.create');
    }

    public function store(SavePostRequest $request){
        Post::create($request->validated());

        return to_route('blog')->with('status', 'Post creado');
    }

    public function edit(Post $post){
        return view('posts.edit', ['post' => $post]);
    }

    public function update(SavePostRequest $request, Post $post){
        $post->update($request->validated());

        return to_route('posts.show', $post)->with('status', 'Post actualizado');
    }

    public function destroy(Post $post){
        $post->delete();

        return to_route('blog', $post)->with('status', 'Post eliminado');
    }
}
