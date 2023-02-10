<?php

namespace App\Http\Controllers;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function get_all()
    {
        return view('categories', [
            'setActiveNav' => 'Categories',
            'title' => 'Categories',
            'categories' => Category::all(),
        ]);
    }

    public function show(Category $category)
    {
        return view('category', [
            'setActiveNav' => 'Categories',
            'title' => $category->name,
            'posts' => $category->posts,
            'category' => $category,
        ]);
    }
}