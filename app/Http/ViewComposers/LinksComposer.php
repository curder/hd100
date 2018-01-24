<?php

namespace App\Http\ViewComposers;

use App\Models\Link;
use Illuminate\Contracts\View\View;

class LinksComposer
{
    protected $top_navigations;
    protected $footer_navigations;
    protected $friend_links;

    /**
     * NavigationComposer constructor.
     */
    public function __construct()
    {
        $this->getNavigations();
    }

    public function compose(View $view)
    {
        $view->with('top_navigations', $this->top_navigations); // 顶部导航
        $view->with('footer_navigations', $this->footer_navigations); // 底部导航
        $view->with('friend_links', $this->friend_links); // 友情链接
    }

    public function getNavigations()
    {
//        $links = Link::get()->toArray();
        $links = Link::getAllLinks();

        $this->top_navigations = getTree($links, 1);
        $this->footer_navigations = getTree($links, 34);
        $this->friend_links = getTree($links, 32);
    }
}
