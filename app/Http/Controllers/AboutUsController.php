<?php

namespace App\Http\Controllers;

use App\Models\AboutCarousel;
use App\Models\AboutTeam;
use App\Models\AboutUs;

class AboutUsController extends Controller
{
    public function index()
    {
        $about_carousel = AboutCarousel::all();
        $about_us = AboutUs::all();
        $about_team = AboutTeam::all();

        return view('AboutUs.about_us', compact(
            'about_carousel',
            'about_us',
            'about_team',
        ));
    }
}
