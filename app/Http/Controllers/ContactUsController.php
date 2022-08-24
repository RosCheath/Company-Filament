<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\ContactUs;
use App\Models\ShopContact;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $shop_contact = ShopContact::all()->sortByDesc('id');
        $contact_us = ContactUs::all()->first();

        return view('ContactUs.contact_us', compact('shop_contact', 'contact_us'));
    }

    public function contact(Request $request)
    {
        $input = $request->all();
        ContactMessage::create($input);

        return redirect()->back()
            ->with('success', 'Your Contact has been send.');
    }
}
