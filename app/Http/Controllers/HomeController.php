<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function team()
    {
        return view('component.team');
    }
    public function salesteam()
    {
        return view('component.salesteam');
    }
    public function product()
    {
        return view('component.product');
    }
}
