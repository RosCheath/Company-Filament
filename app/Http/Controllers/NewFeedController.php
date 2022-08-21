<?php

namespace App\Http\Controllers;

use App\Models\Feed;

class NewFeedController extends Controller
{
    public function index()
    {
        $feed = Feed::all();

        return view('NewFeed.new_feed', compact('feed'));
    }
}
