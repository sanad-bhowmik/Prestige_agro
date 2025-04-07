<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function team()
    {
        return view('component.team');
    }
    public function product()
    {
        return view('component.product');
    }
}
