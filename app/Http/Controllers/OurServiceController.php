<?php

namespace App\Http\Controllers;

use App\Models\AboutCarousel;
use App\Models\Service;

class OurServiceController extends Controller
{
    public function index()
    {
        $servic = Service::latest()->get();
        $about_carousel = AboutCarousel::all();

        return view('OurServices.our_services', compact('servic', 'about_carousel'));
    }
}
