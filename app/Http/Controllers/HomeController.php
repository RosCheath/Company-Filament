<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Feed;
use App\Models\Home_Carousel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $carousel = Home_Carousel::all()->where('is_public', '=', '1');
        $HomeFeed = Feed::where('is_public', '1')->latest()->paginate(4);

        return view('Home.home', compact('carousel', 'HomeFeed'));
    }

    public function appointment(Request $request)
    {
        $input = $request->all();
        Appointment::create($input);

        return redirect()->back()
            ->with('success', 'Your appointment has been send');
    }
}
