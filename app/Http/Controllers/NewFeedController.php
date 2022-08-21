<?php

namespace App\Http\Controllers;

use App\Models\Feed;

class NewFeedController extends Controller
{
    public function index()
    {
        $feed = Feed::all()->where('is_public', '=', '1');

        return view('NewFeed.new_feed', compact('feed'));
    }
}
