<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function profile()
    {
        return view('profile');
    }

    public function about()
    {
        return view('about');
    }
}