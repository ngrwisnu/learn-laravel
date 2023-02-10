<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function posts(User $user)
    {
        return view('authors_posts', [
            'title' => "User's Posts",
            'heading' => $user,
            'posts' => $user->posts,
        ]);
    }
}
