<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\Post;

class PostsController extends Controller
{
    //  Login is necessary
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $users = auth()->user()->following()->pluck('profiles.user_id');

        //  To get all the posts that we need in chronological order

        $posts = Post::whereIn('user_id', $users)->with('user')->latest()->paginate(5);

        return view('posts.index', compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required','image']
        ]);

        $imagepath = request("image")->store('uploads', 'public');

        $image = Image::make(public_path("storage/{$imagepath}"))->fit(1200,1200);
        $image->save();

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagepath,
        ]);

        return redirect('/profile/' . auth()->user()->id);
    }

    public function show(\App\Models\Post $post){
        return view('posts.show', compact('post'));
    }
}
