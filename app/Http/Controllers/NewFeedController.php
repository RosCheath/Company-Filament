<?php

namespace App\Http\Controllers;

use App\Models\AboutCarousel;
use App\Models\Feed;

class NewFeedController extends Controller
{
    public function index()
    {
        $feed = Feed::orderByDesc('id')->where('is_public', '=', '1')->get();
        $about_carousel = AboutCarousel::all();

        return view('NewFeed.new_feed', compact('feed', 'about_carousel'));
    }

    public function view(Feed $feed)
    {
        return view('NewFeed.view', compact('feed'));
    }
}
