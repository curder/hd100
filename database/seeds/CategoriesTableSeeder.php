<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        $categories = [
            'company-news' => '公司新闻',
            'hot-news' => '热点资讯',
            'project-achievements' => '课题成果',
        ];

        $order = 0;

        foreach ($categories as $key => $category) {
            $order++;
            Category::create([
                'title' => $category,
                'uri' => $key,
                'order' => $order,
            ]);
        }
    }
}
