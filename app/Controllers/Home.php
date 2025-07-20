<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('frontend/home');
    }

    public function about(): string
    {
        return view('frontend/about');
    }
}
