<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class ContactPageController extends Controller
{
    public function index()
    {
        return view('website.pages.contact.index');
    }

    public function help()
    {
        $title = "Bantuan";

        return view('website.pages.contact.bantuan', compact('title'));
    }
}
