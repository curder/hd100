<?php

namespace App\Http\Controllers\Home;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index($category)
    {
        $category = Category::find($category);
        $posts = $category->posts()->paginate(6);;

        return view('home.posts.index', compact('category', 'posts'));
    }

    public function show($year,Post $post)
    {
        return view('home.posts.show', compact('post'));
    }
}
