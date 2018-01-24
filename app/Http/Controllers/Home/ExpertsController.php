<?php

namespace App\Http\Controllers\Home;

use App\Models\Expert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExpertsController extends Controller
{
    public function index()
    {
        $experts = Expert::oldest('order')->paginate(6);

        return view('home.experts.index', compact('experts'));
    }

    public function show(Expert $expert)
    {
        return view('home.experts.show', compact('expert'));
    }
}
