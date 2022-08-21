<?php

namespace App\Http\Controllers;

use App\Models\Home_Carousel;

class HomeController extends Controller
{
    public function index()
    {
        $carousel = Home_Carousel::all()->where('is_public','=','1');
        return view('Home.home',compact('carousel'));
    }
}
