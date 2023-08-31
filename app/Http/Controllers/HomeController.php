<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function search($word)
    {
        $posts = Post::where('title', 'LIKE', '%' . $word . '%')->get();
        return response()->json($posts);
        }
    public function CreateComment(Request $request, $id)
    {
        Comment::create([
            "post_id" => $id,
            "user_id" => 2,
            'body' => "dfghjiopojhg"
        ]);
        return response()->json(['message' => 'Comment created successfully']);
    }
}
