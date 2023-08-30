<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    public function search($word)
    {
        $posts = Post::where('title', 'LIKE', '%' . $word . '%')->get();
        return response()->json($posts);
    }
}
