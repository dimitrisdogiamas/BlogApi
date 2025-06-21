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

    // function to show a single post 
    public function show($id) {
        $post = Post::find($id);

        // if the post does not exist, return a 404 error
        if(!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }

        return response()->json($post);
    }

    public function update(Request $request, $id) {
        $post = Post::find($id);

        if(!$post) {
            return response()->json(['message' => "Post not found"], 404);
        }
//   we update the post data via request 

        $post->update([
            'title' => $request->input('title'),
            'content'=> $request->input('content'),
        ]);

        return response()->json($post);
    }

    public function destroy($id) {
        $post = Post::find($id);

        if(!$post) {
            return response()->json(['message' => "Post not found"], 404);
        }
        // the delete method

        $post->delete();

        return response()->json(['message' => "Post deleted successfully"], 201);
    }
}
