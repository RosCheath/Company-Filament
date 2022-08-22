<?php

namespace App\Http\Controllers;

use App\Models\Service;

class OurServiceController extends Controller
{
    public function index()
    {
        $servic = Service::latest()->get();
        return view('OurServices.our_services',compact('servic'));
    }
}
