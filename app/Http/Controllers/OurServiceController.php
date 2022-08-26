<?php

namespace App\Http\Controllers;

use App\Models\AboutCarousel;
use App\Models\Service;

class OurServiceController extends Controller
{
    public function index()
    {
        $service = Service::latest()->get();
        $about_carousel = AboutCarousel::all();

        return view('OurServices.our_services', compact('service', 'about_carousel'));
    }
    public function view(Service $service){
        return view('OurServices.view',compact('service'));
    }
}
