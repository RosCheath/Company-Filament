<?php

namespace App\Http\Controllers;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('ContactUs.contact_us');
    }
}
