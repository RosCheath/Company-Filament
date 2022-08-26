<?php

namespace App\Http\Controllers;

use App\Models\AboutTeam;
use App\Models\AboutUs;
use App\Models\Appointment;
use App\Models\Feed;
use App\Models\Home_Carousel;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $carousel = Home_Carousel::all()->where('is_public', '=', '1');
        $HomeFeed = Feed::where('is_public', '1')->latest()->paginate(4);
        $service = Service::all()->where('is_public', '=', '1');
        $team = AboutTeam::all();
        $about_us = AboutUs::all()->first();

        $service_count = Service::all()->count();
        $count_appoint = Appointment::all()->count();

        return view('Home.home', compact('carousel',
            'HomeFeed',
            'service',
            'team',
            'service_count',
            'count_appoint',
            'about_us'
        ));
    }

    public function appointment(Request $request)
    {
        $input = $request->all();
        Appointment::create($input);

        return redirect()->back()
            ->with('success', 'Your appointment has been send');
    }
}
