<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index(){
        $posts = Post::orderBy('id','DESC')->get();
        return view('posts.index',compact('posts'));
    }
    public function show($id){
        $post = Post::find($id);
        return view('posts.show',compact('post'));
    }
}
