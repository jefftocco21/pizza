<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //show all
    public function index(){
        // dd(request('tag'));
        return view('posts.index', [
            'heading' => 'Latest Posts',
            'posts' => Post::latest()->filter(request(['tag', 'search']))
            ->get() //same as all but sorted
        ]);
    }

    //show single
    public function show(Post $post){
        return view('posts.show', [
            'post' => $post
        ]);
    }

    //post create
    public function create(){
        return view('posts.create');
    }
}
