<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * 练习我们
     */
    public function concat($city = 'beijing')
    {
        $cities = json_decode(config('concat_cities'), true);
        $city = json_decode(config('concat_' . $city), true);
        if (!$city) redirect(route('home.index'));

        return view('home.pages.concat', compact('cities', 'city'));
    }
}
