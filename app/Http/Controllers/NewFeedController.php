<?php

namespace App\Http\Controllers;

use App\Models\AboutCarousel;
use App\Models\Feed;

class NewFeedController extends Controller
{
    public function index()
    {
        $feed = Feed::all()->where('is_public', '=', '1');
        $about_carousel = AboutCarousel::all();

        return view('NewFeed.new_feed', compact('feed', 'about_carousel'));
    }
    public function view(Feed $feed){
        $feed_rendom = Feed::where('is_public', '1')->latest()->paginate(4);
        return view('NewFeed.view',compact('feed','feed_rendom'));
    }
}
