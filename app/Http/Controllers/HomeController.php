<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function team()
    {
        return view('component.team');
    }
    public function teambd()
    {
        return view('component.teambd');
    }
    public function salesteam()
    {
        return view('component.salesteam');
    }
    public function salesteambd()
    {
        return view('component.salesteambd');
    }
    public function product()
    {
        return view('component.product');
    }
    public function productbd()
    {
        return view('component.productbd');
    }
}
