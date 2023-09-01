<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function search($word)
    {
        $posts = Post::where('title', 'LIKE', '%' . $word . '%')->get();
        return response()->json($posts);
        }
    public function CreateComment(Request $request, $id)
    {
        $this->validate($request,[
            "body" => "required|max:254"
        ]);
        Comment::create([
            "post_id" => $id,
            "user_id" => auth()->user()->id,
            'body' => $request->body
        ]);
        return response()->json(['message' => 'Comment created successfully']);
    }
}
