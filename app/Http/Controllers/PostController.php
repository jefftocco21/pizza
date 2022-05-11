<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //show all
    public function index(){
        return view('posts.index', [
            'heading' => 'Latest Posts',
            'posts' => Post::all()
        ]);
    }

    //show single
    public function show(Post $post){
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
