<?php

namespace App\Http\ViewComposers;


use App\Models\Category;
use App\Models\Post;
use Illuminate\Contracts\View\View;

class PostsComposer
{
    public function compose(View $view)
    {
        $view->with('first_post_list', $this->getPostList(1, 6)); // 首页文章列表
        $view->with('second_post_list', $this->getPostList(2, 6)); // 首页文章列表
        $view->with('third_post_list', $this->getPostList(3, 6)); // 首页文章列表
    }

    public function getPostList($category, $limit = 6)
    {
        $posts = Category::with(['posts' => function ($query) use ($limit) {
            return $query->limit($limit)
                ->latest('index_recommend')
                ->oldest('order')
                ->get();
        }])->find($category);

        return $posts;
    }
}
