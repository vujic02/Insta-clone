<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index() {

        // $posts = Post::all();
        $posts = Post::orderBy("date")->get();
    
        return view('posts.wall', ['posts'=>$posts]);
    }

    public function show($id) {

        $post = Post::findOrFail($id);

        return view("posts.show", ['post' => $post]);
    }

    public function store() {
        return redirect("/");
    }

}
