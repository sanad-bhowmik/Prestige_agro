<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;  // Import the Career model

class CareerController extends Controller
{
    public function career()
    {
        $careers = Career::where('Status', 1)->get();  // Fetch only records with Status = 1
        return view('component.career', compact('careers'));
    }
    public function careerbd()
    {
        $careers = Career::where('Status', 1)->get();  // Fetch only records with Status = 1
        return view('component.careerbd', compact('careers'));
    }
}
