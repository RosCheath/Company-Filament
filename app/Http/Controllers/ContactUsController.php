<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\ShopContact;

class ContactUsController extends Controller
{
    public function index()
    {
        $shop_contact = ShopContact::all()->sortByDesc('id');
        $contact_us = ContactUs::all()->first();

        return view('ContactUs.contact_us', compact('shop_contact', 'contact_us'));
    }

    public function contact()
    {
        return redirect()->back();
    }
}
