<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $contenuPosts = Post::all();
        return view('post',compact('contenuPosts'));
    }
    public function destroy($id) {
        $item = Post::find($id);
        $item->delete();
        return redirect ('/');
    }
    public function edit(){
        
        return view ('edit');
    }
}
