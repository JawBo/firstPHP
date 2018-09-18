<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    public function edit($id){
        $item = Post::find($id);
        return view ('edit',compact ('item'));
    }
    public function update(Request $request, $id){
        $item = Post::find($id);
        $item->titre = $request->leTitre;
        $item->description = $request->laDescription;
        $item->save();
        return redirect ('/');
    }   
    public function create(Request $request){
        
        $item = Post::create();
        $request->leTitre = $item->titre;
        $request->laDescription=$item->description;
        $item->save();
        return redirect('/');
    }
    

}
