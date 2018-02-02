<?php

namespace App\Http\Controllers\Home;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller {
	public function index( Category $category ) {
//        $category = Category::find($category_id);
		$posts = $category->posts()->orderBy( 'order' )->paginate( 6 );;

		return view( 'home.posts.index', compact( 'category', 'posts' ) );
	}

	public function show( Post $post ) {
		return view( 'home.posts.show', compact( 'post' ) );
	}
}
