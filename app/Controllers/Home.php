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
}