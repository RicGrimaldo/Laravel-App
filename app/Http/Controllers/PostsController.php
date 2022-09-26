<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //  Login is necessary
    public function __construct(){
        $this->middleware('auth');
    }
    public function create(){
        return view('posts.create');
    }

    public function store(){
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required','image']
        ]);

        auth()->user()->posts()->create($data);

        \App\Models\Post::create($data);

        dd(request()->all());
    }
}
