<?php

namespace App\Http\Controllers;

use App\Models\ShopContact;

class ContactUsController extends Controller
{
    public function index()
    {
        $shop_contact = ShopContact::all()->sortByDesc('id');
        return view('ContactUs.contact_us',compact('shop_contact'));
    }
}
