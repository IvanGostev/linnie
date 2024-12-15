<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('main.index');
    }
    public function aboutUs()
    {
        return view('main.about-us');
    }
    public function news()
    {
        return view('main.blog-single');
    }
    public function contact()
    {
        return view('main.contact');
    }
}
