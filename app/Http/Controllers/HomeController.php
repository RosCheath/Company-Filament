<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use App\Models\Home_Carousel;

class HomeController extends Controller
{
    public function index()
    {
        $carousel = Home_Carousel::all()->where('is_public', '=', '1');
        $HomeFeed = Feed::where('is_public', '1')->latest()->paginate(4);
        return view('Home.home', compact('carousel','HomeFeed'));
    }
}
