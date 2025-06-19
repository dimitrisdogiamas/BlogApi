<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    //
    //function to show all the posts
    public function index()
    {
        $posts = Post::all();
        return response()->json($posts);
    }

    // function to create a new post 
    public function store(Request $request){
        $post = Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);
        return response()->json($post, 201);
    }

}
