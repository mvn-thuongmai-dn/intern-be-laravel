<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($id)
    {
        $data = Post::where('user_id', $id)->get();
        return view('components.posts.index', ['posts' => $data]);
    }
}
