<?php

namespace App\Http\Controllers;

class NewFeedController extends Controller
{
    public function index()
    {
        return view('NewFeed.new_feed');
    }
}
