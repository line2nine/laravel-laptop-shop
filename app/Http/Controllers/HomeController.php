<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.master');
    }

    public function showMainProducts()
    {
        return view('home.main');
    }

    public function showSecondProducts()
    {
        return view('home.second');
    }
}
