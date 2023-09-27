<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('frontend/home');
    }
    public function service()
    {
    return view('frontend/service');
    }
    public function package()
    {
    return view('frontend/package');
    }
    public function facilities()
    {
    return view('frontend/facilities');
    }
    public function about()
    {
    return view('frontend/About');
    }
    public function contact()
    {
    return view('frontend/contact');
    }
    public function booking()
    {
    return view('frontend/booking');
    }
    
}