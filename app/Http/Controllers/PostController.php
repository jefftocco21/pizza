<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

    //store post data
    public function store(Request $request){
        $fields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('posts','company')],
            'location' => ['required'],
            'tags' => ['required'],
            'desc' => ['required']
        ]);

        Post::create($fields);

        return redirect('/');
    }
}
