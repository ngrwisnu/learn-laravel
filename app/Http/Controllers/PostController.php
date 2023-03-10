<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
 
        return view('blog', [
            'setActiveNav' => 'Blog',
            "title" => "Blog",
            "posts"=> Post::latest()->filter(request(['search', 'category']))->paginate(7)
        ]);
    }

    public function show(Post $post) {
        return view('post', [
            'setActiveNav' => 'Blog',
            "title"=>"Post",
            "post"=> $post,
        ]);
    }
}
