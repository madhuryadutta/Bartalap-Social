<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use DB;
use Session;

class PostController extends Controller
{
    //
    public function index()
    {
        $post = Post::all();
        $user = User::all();
        $data= compact('post','user');
        return view('home')->with($data);
    }
    public function store(Request $request)
    {
        $filename = time() . "-post." . $request->file('post_media')->getClientOriginalExtension();
        $request->file('post_media')->storeAs('uploads', $filename);
        $post = new Post;
        $post->user_id = $request['user_id'];
        $post->post_text = $request['post_text'];
        $post->post_media = $filename;
        $post->save();
        // return view('home');
    }
}
